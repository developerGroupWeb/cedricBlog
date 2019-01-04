<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 05/01/2019
 * Time: 00:05
 */

class EmailToken
{
    static function send($token, $email){

        $dest ="$email";
        $message =" 
             <h4>Code de réinitialisation de mot de passe </h4>
             <b>$token</b> 
    ";
        $header ='From:"CEDRIC" <contact@cedricagossou.com>'."\n";
        $header.='Content-Transfer-encoding: 8bit'."\n";
        $header.= "Content-Type: text/html; charset=iso-8859-1";

        mail($dest,$message,$header);
    }
}