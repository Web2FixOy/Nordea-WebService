<?php


namespace Profit\Nordea\API;


class Helper
{

    static public function hexRandom($length = 64)
    {
        return join('',array_map(function(){
            return dechex(random_int(0,15));
        },range(0, $length-1)));
    }
}