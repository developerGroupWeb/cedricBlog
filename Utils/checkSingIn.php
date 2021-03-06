<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 27/12/2018
 * Time: 18:25
 */
require_once 'xss.php';

spl_autoload_register(function ($class){

    require_once '../class/'.$class.'.php';
});


$email = e($_POST['email']);
$pass = e(sha1($_POST['password']));
$errors = [];

if(!empty($email)){

    if(!empty($pass)){

       $row  = Model::row('users', $email);
       $user  = Model::getUser('users', $email);

       if($row == 1) {

           foreach ($user as $value){

               if ($pass === $value['password']) {

                   $errors['fail'] = false;
                   $errors['success'] = 'success';

                   session_start();
                   $_SESSION['first_name'] = $value['firstname'];
                   $_SESSION['last_name']  = $value['lastname'];

               } else {

                   $errors['fail'] = true;
                   $errors['pass'] = 'Mot de passe incorrect';
               }
           }

       }else{

           $errors['fail'] = true;
           $errors['email'] = 'E-mail incorrect';
       }

    }else{

        $errors['fail'] = true;
        $errors['pass'] = 'Enter votre  mot de passe';
    }

}else{

    $errors['fail'] = true;
    $errors['email'] = 'Enter votre e-mail';
}

echo json_encode($errors);