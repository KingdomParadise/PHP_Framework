<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Ip\StoreRequest;
use App\Models\MainUsers;

class IpController extends Controller
{
    /**
     * Get cart information
     *
     * @param IndexRequest $request
     *
     * @return JsonResponse
     */
    public function store(StoreRequest $request)
    {
        $request->session()->put('manual_allowed_ip', true);

        $ipAddress = $request->ip();
        //example IP: 2.20.184.255 188.43.136.32
        // $ipAddress = '188.43.136.32';
        try {
            $user = MainUsers::where('ip_address', '=', $ipAddress)->firstOrFail();
            if ($user->allowed_times < 3)
                $user->allowed_times = $user->allowed_times + 1;
            $user->save();
            return response()->json(['success' => 'success'], 200);
        } catch(\Exception $e) {
            return response()->json(['error' => "This Ip address is not in database."], 500);
        }
    }
}
