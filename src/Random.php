<?php 

namespace PhpDasar\RandomNumber;

class Random 
{
    public static function getNumber()
    {   
        // return rand(123000, 1000000);
        return vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
    }
}