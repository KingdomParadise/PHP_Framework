<?php

namespace App\Utils;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class IpChecking
{
    /**
     *  Checking Ip address is near German (2021.2.26)
     *
     * @return boolean
     */
    public static function isValid(Request $request)
    {
        // $ipAddress = $request->ip();
        //example IP: 2.20.184.255 188.43.136.32
        $ipAddress = '188.43.136.32';
        return self::ORIGIN + self::getRate();

        if ($position = Location::get($ipAddress)) {
            if ($position->countryName === 'Germany') {
                return true;
            } else return false;
        }
    }
}