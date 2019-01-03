<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 03/01/2019
 * Time: 15:21
 */
require_once 'xss.php';

spl_autoload_register(function ($class){

    require_once 'class/'.$class.'.php';
});

$email     = e($_POST['email']);
$firstname = e($_POST['first_name']);
$lastname  = e($_POST['last_name']);
$message   = e($_POST['message']);
$company   = e($_POST['company']);

$errors = [];

if(!empty($firstname) && !empty($email) && !empty($lastname) && !empty($message)){

    $dest ="contact@cedricagossou.com";
    $message =" 
      <strong> 
      <h2>Compagnie <b>$company ? $company : ''</b></h2>
      <h4>Envoyer par $lastname  $lastname</h4>
         $message
      </strong> 
   ";
    $header = "From: $email\n";
    $header.= "Cc: $dest\n";
    $header.= "Reply-To: $email\n";
    $header.= "Content-Type: text/html; charset=iso-8859-1";

    if(mail($dest,$message,$header)){

        $errors['fail'] = false;
        $errors['message'] = "Your message has been sent successfully";

    }else {

        $errors['fail'] = true;
        $errors['message'] = "Sorry, there was a problem sending";
    }

}else{

    $errors['fail'] = true;
    $errors['errors'] = 'Sorry, all fields must be filled';
}

echo json_encode($errors);