<?php 

namespace PhpDasar\RandomNumber;

class Random 
{
    public static function getNumber()
    {   
        return rand(100000000000, 1100000000000000);
    }

    public static function getString()
    {   
        return vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
    }
}