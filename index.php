<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php
            include_once 'classes/Html.php';
            $htmeul = new Html();
            echo $htmeul->setCssLink("style.css");
            echo $htmeul->setScript('script.js');
        ?>

    </head>
    <body>
        <?php

            include_once 'classes/Form.php';

            $monForm = new Form();

            echo $monForm->getDebut();
            echo  $monForm->getInputText();
            echo $monForm->getCheckbox();
            echo $monForm->getFin();

            echo $htmeul->setImage("dog.jpg", "chien");

            echo $htmeul->setAnchor("traitement.php?entier=Caca&decimal=1&string=13", "Traitement");

        ?>
    </body>
</html>


