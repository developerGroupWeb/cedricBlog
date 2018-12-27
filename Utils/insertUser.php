<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 27/12/2018
 * Time: 19:52
 */
require_once 'xss.php';

spl_autoload_register(function ($class){

    require_once '../class/'.$class.'.php';
});

$firstname = e($_POST['first_name']);
$lastname  = e($_POST['last_name']);
$email     = e($_POST['email']);
$password  = e(sha1($_POST['password']));

$errors = [];

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){

    $row = Model::row('users', $email);

    if($row == 0){

        Model::insertUser('users', [$firstname, $lastname, $email, $password]);

        $errors['fail'] = true;
        $errors['success'] = 'Vous êtes enregistré!';

    }else{

        $errors['fail'] = true;
        $errors['errors'] = 'Cet e-mail est existe déjà';
    }


}else{

    $errors['fail'] = true;
    $errors['errors'] = 'Tous les champs doivent être remplis';
}

echo json_encode($errors);