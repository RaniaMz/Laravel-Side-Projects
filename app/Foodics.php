<?php

namespace App;

use Illuminate\Contracts\Foundation\Application;

class Foodics
{
    /**
     * @param  null  $value
     * @return Application|mixed|null
     */
    public static function token($value = null)
    {
        if (func_num_args() == 0) {
            return app()->bound('currentToken') ? app('currentToken') : session('access_token');
        }
        session(['access_token' => $value]);

        app()->instance('currentToken', $value);
    }

    /**
     * @param  null  $value
     * @return Application|mixed|null
     */
    public static function business($value = null)
    {
        if (func_num_args() == 0) {
            return app()->bound('currentBusiness') ? app('currentBusiness') : session('currentBusiness');
        }

        session(['currentBusiness' => $value]);

        app()->instance('currentBusiness', $value);
    }

    /**
     * @param  null  $value
     * @return Application|mixed|null
     */
    public static function whoAmI($value = null)
    {
        if (func_num_args() == 0) {
            return app()->bound('whoami') ? app('whoami') : session('whoami');
        }

        session(['whoami' => $value]);

        app()->instance('whoami', $value);
    }

    /**
     * @param  null  $value
     * @return Application|mixed|null
     */
    public static function clientToken($value = null)
    {
        if (func_num_args() == 0) {
            return app()->bound('currentClientToken') ? app('currentClientToken') : null;
        }

        app()->instance('currentClientToken', $value);
    }
}
