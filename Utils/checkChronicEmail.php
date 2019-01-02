<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 02/01/2019
 * Time: 18:14
 */

require_once 'xss.php';
spl_autoload_register(function ($class){

    require_once '../class/'.$class.'.php';
});
$email   = e($_POST['email']);
$errors  = [];

if(!empty($email)){

    $row  = Model::row('chronic', $email);

    if($row == 1){
        $errors['email'] = 'Cet e-mail reçoive déjà nos chroniques gratuits';
    }
}
echo json_encode($errors);