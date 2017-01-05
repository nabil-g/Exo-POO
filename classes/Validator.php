<?php

class Validator {

    public function checkEntier($var) {
        if (is_int($var)) {
            return "C'est bien un entier" . "<br>" ;
        }
        else{
            return "Ce n'est pas un entier" . "<br>";
        }
    }

    public function checkDecimal($var) {
        if (is_float($var)) {
            return "C'est bien un décimal" . "<br>";
        }
        else{
            return "Ce n'est pas un décimal" . "<br>";
        }
    }

    public function checkString($var) {
        if (is_string($var)) {
            return "C'est bien une chaîne de caractères" . "<br>";
        }
        else{
            return "Ce n'est pas une chaîne de caractères" . "<br>";
        }
    }

}