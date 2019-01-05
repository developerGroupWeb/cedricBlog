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

        $dest = $email;
        $subject = "Code de réinitialisation de mot de passe";
        $message =" 
            <body>
                <strong> 
                  <h5>$subject</h5>
                     <b>$token</b>
                 </strong> 
            </body>
     
   ";
        $header = "From: contact@cedricagossou.com\n";
        $header.= "Content-Type: text/html; charset=utf-8";

        mail($dest, $subject, $message, $header);
    }
}