<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 04/01/2019
 * Time: 23:03
 */
require_once 'xss.php';

spl_autoload_register(function ($class){

    require_once '../class/'.$class.'.php';
});

$email  = e($_POST['email']);
$errors = [];

if(!empty($email)){

    $row  = Model::row('users', $email);
    if($row === 1){

        $rowtoken = Model::row('reset_password', $email);
        $token = Token::getToken();

        if($rowtoken === 0){

            Model::insertToken('reset_password', [$email, $token]);

        }else{

            Model::update('reset_password', [$token, $email]);
        }

        EmailToken::send($token, $email);

    }else{

        $errors['errors'] = 'Votre e-mail ne correspond pas à un utilisateur';
    }

}else{

    $errors['errors'] = 'Taper votre e-mail de récuperation';
}

echo json_encode($errors);