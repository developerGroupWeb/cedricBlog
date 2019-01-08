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
        $subject = "Lien de réinitialisation de mot de passe";
        $message =" 
            <body>
                <strong> 
                  <h5>Cliquez <a href='https://www.cedricagossou.com/verify_code.php?email=$email&token=$token'>ici</a> </h5>
                  <p><a href='https://www.cedricagossou.com/verify_code.php?email=$email&token=$token'>https://www.cedricagossou.com/verify_code.php?email=$email&token=$token</a></p>
                 </strong> 
            </body>
     
   ";
        $header = "From: contact@cedricagossou.com\n";
        $header.= "Content-Type: text/html; charset=utf-8";

        mail($dest, $subject, $message, $header);
    }
}