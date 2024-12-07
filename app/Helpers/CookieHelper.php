<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;

class CookieHelper
{
    const COOKIE_NAME = 'registration_count';

    public static function getRegistrationCount()
    {
        return Cookie::get(self::COOKIE_NAME, 0);
    }

    public static function incrementRegistrationCount()
    {
        $count = self::getRegistrationCount();
        $count++;
        Cookie::queue(self::COOKIE_NAME, $count, 1440); // 1440 minutes = 1 day
    }

    public static function resetRegistrationCount()
    {
        Cookie::queue(self::COOKIE_NAME, 0, 1440);
    }
}
