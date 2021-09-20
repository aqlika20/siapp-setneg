<?php

namespace App;

class Helper {

    public static function convertDatetoMonths($date){
        $date = date('m', strtotime($date));

        return $date;
    }
};