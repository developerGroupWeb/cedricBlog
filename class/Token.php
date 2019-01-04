<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 04/01/2019
 * Time: 22:14
 */

class Token
{
    static function getToken()
    {
        $code = '';
        for($i = 0; $i < 8; $i++){

            $code .= mt_rand(0, 9);
        }
        return $code;
    }
}