<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 02/01/2019
 * Time: 19:03
 */

require_once 'xss.php';

spl_autoload_register(function ($class){

    require_once '../class/'.$class.'.php';
});

$firstname = e($_POST['first_name']);
$lastname  = e($_POST['last_name']);
$email     = e($_POST['email']);


$errors = [];

if(!empty($firstname) && !empty($lastname) && !empty($email)){

        Model::insertUserChronic('chronic', [$firstname, $lastname, $email]);

        $errors['fail'] = true;
        $errors['success'] = 'Vous êtes inscrit à nos chroniques gratuits!';

}else{

    $errors['fail'] = true;
    $errors['errors'] = 'Tous les champs doivent être remplis';
}

echo json_encode($errors);