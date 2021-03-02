<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Models\MainUsers;
class EnsureIpIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $ipAddress = $request->ip();
        //example IP: 2.20.184.255 188.43.136.32
        // $ipAddress = '188.43.136.32';
        $manualAllowedIp = $request->session()->get('manual_allowed_ip');

        // $mainUsers->ip_address = $ipAddress;

        $user = MainUsers::where('ip_address', '=', $ipAddress)->get();
        if (!$user->isEmpty()) {
            $mainUsers = $user->first();
        }
        else {
            $mainUsers = new MainUsers;
        }
        $mainUsers->ip_address = $ipAddress;

        $uri = $request->path();
        if ($uri === 'ip-invalid' || $manualAllowedIp) return $next($request);

        if ($position = Location::get($ipAddress)) {
            // Successfully retrieved position.
            if ($position->countryName === 'Germany') {
                $mainUsers->ip_valid = true;
                $mainUsers->save();
                
                return $next($request);
            }
            else {
                $mainUsers->save();

                return redirect('ip-invalid');
            }
        }
        else {
            $mainUsers->save();
                    
            return redirect('ip-invalid');
        }
    }
}
