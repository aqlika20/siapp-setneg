<?php

namespace App\Helpers;

class StringHelper
{
    /**
     * check string is json
     *
     * @param  string $str
     * @return boolean
     */
    public function isJson($str)
    {
        return is_string($str) && is_array(json_decode($str, true)) ? true : false;
    }
}
