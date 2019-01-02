<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 29/11/2018
 * Time: 11:48
 */

class Validator
{
    public $var, $errors = [];

    function inputText($string)
    {
        if(array_key_exists($string, $_POST)){

            return $this->var = $_POST[$string];
        }
        return e($this->var);
    }

    function inputEmail($string)
    {
        if(array_key_exists($string, $_POST)){

            return $this->var = $_POST[$string];
        }
        return e($this->var);
    }

    function inputPassword($string)
    {
        if(array_key_exists($string, $_POST)){

            return $this->var = $_POST[$string];
        }
        return e($this->var);
    }

    function mdp_check($string){

        if($this->inputPassword($string) != ''){

            if(strlen($this->inputPassword($string)) >= 8){

            }else{

                $this->errors[$string] = 'Taper 8 caractères minimum!';
            }

        }else{

            $this->errors[$string] = "Ce champ est requis!";
        }
    }

    function text_check($string){

        if($this->inputText($string) != ''){

            if(strlen($this->inputText($string)) >= 4){

                if(holds_string($this->inputText($string))){



                }else{

                    $this->errors[$string] = "Ce champ comporte des caractères non autorisé";
                }

            }else{

                $this->errors[$string] = 'Taper 4 caractères minimums!';
            }

        }else{

            $this->errors[$string] = "Ce champ est requis!";
        }
    }

    function email_check($string){

        if($this->inputText($string) != ''){

            if(strlen($this->inputEmail($string)) >= 4){

                if(filter_var($this->inputEmail($string),FILTER_VALIDATE_EMAIL)){


                }else{

                    $this->errors[$string] = "$string est invalide";
                }

            }else{

                $this->errors[$string] = 'Taper 4 caracteres minimum!';
            }

        }else{

            $this->errors[$string] = " $string est requis!";
        }
    }

    function errors($string){

        if(isset($this->errors[$string]))
            return $this->errors[$string];
    }

    function success(){

        if(empty($this->errors)){
            echo 'success';
        }
    }
}