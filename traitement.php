
<?php

if (isset($_GET['entier'], $_GET['decimal'], $_GET['string'])) {
    var_dump($_GET['entier']);
    echo "<br>";
    var_dump($_GET['decimal']);
    echo "<br>";
    var_dump($_GET['string']);
    echo "<br>";

    include_once 'classes/Validator.php';
    $valider = new Validator();
    echo $valider->checkEntier($_GET['entier']);
    echo $valider->checkDecimal($_GET['decimal']);
    echo $valider->checkString($_GET['string']);
}

?>


