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

    }
}