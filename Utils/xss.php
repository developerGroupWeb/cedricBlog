<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 27/12/2018
 * Time: 18:13
 */
function e($var){
    return htmlspecialchars($var, ENT_QUOTES);
}

function holds_string($var){
    return preg_match("/^-?[A-Za-zéèêëíìîïñóòôöõúùûüýÿæ\-\ ]+$/", $var); // ici (\-) me permet d'autoriser '-' dans un prenom
}