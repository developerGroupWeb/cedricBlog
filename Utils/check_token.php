<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 05/01/2019
 * Time: 11:14
 */

require_once 'xss.php';

spl_autoload_register(function ($class){

    require_once '../class/'.$class.'.php';
});

$code  = e($_POST['code']);
$email = e($_POST['email']);
$errors = [];

if(!empty($code)){

    $row  = Model::rowToken('reset_password', [$email, $code]);

    if($row == 0){

        $errors['errors'] = 'Votre code est incorrect';
    }

}else{

    $errors['errors'] = 'Taper votre code';
}

echo json_encode($errors);