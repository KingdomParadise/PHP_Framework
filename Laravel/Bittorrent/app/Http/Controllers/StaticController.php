<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Models\MainUsers;

class StaticController extends Controller
{
    public function imprint() {
        return view('static.imprint');
    }

    public function dataPrivacy() {
        return view('static.data_privacy');
    }

    public function imageLicences() {
        return view('static.imageLicences');
    }

    public function ipInvalid(Request $request) {
        $request->session()->put('manual_allowed_ip', false);
        // $ipAddress = $request->ip();
        //example IP: 2.20.184.255 188.43.136.32
        $ipAddress = '188.43.136.32';

        // $mainUsers->ip_address = $ipAddress;

        $user = MainUsers::where('ip_address', '=', $ipAddress)->get();
        if (!$user->isEmpty()) {
            $allowedTimes = $user->first()->allowed_times;
        }
        else $allowedTimes = 0;
        return view('static.ip_invalid', ['allowedTimes' => $allowedTimes]);
    }
}
