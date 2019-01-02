<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 28/12/2018
 * Time: 11:20
 */
session_destroy();
unset($_SESSION);
unset($_COOKIE);
header('Location:index.php');