<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 01/01/2019
 * Time: 02:03
 */
require_once 'xss.php';

spl_autoload_register(function ($class){

    require_once 'class/'.$class.'.php';
});


$validator = new Validator;
if(isset($_POST['submit'])){

    $validator->text_check('first_name');
    $validator->text_check('last_name');
    $validator->email_check('email');
    $validator-> mdp_check('password');

    if(count($validator->errors) == 0){
       echo count($validator->errors);

        $row = Model::row('users', $validator->inputEmail('email'));
        if($row == 0){

            Model::insertUser('users', [$validator->inputText('first_name'), $validator->inputText('last_name'), $validator->inputEmail('email'), sha1($validator->inputPassword('password'))]);

            $validator->errors['success'] = 'Vous êtes enregistré!';

            session_start();
            $_SESSION['first_name'] = $validator->inputText('first_name');
            $_SESSION['last_name']  = $validator->inputText('last_name');
            header('Location:mon-espace.php');

        }else{

            $validator->errors['err'] = 'Cet e-mail est existe déjà';
        }
    }
}
