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

        $row = Model::row('users', $validator->inputEmail('email'));
        if($row == 0){

            Model::insertUser('users', [$validator->inputText('first_name'), $validator->inputText('last_name'), $validator->inputEmail('email'), $validator->inputPassword('password')]);

            $errors['success'] = 'Vous êtes enregistré!';

        }else{

            $errors['errors'] = 'Cet e-mail est existe déjà';
        }
    }
}