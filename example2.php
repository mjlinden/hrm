<?php

include "autoloader.php";

use nl\mondriaan\ict\Teacher;

$teachers=[];
$a=5;
$teachers[0]=new Teacher("Piet","Jansen","JANP",
    ["database","php","UML"],["T2L"],
    );
$teachers[1]=new Teacher("Jan","Kassenaar", "KASJ",
    ["nederlands","engels","duits"],null,
    );
$teachers[2]=new Teacher("Mark", "Rutte", "RUTM",
    ["geschiedenis","staatsinrichting"],["T2K","T2H"],
        );
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Teachers</title>
    </head>
    <body>
    <?php foreach ($teachers as $teacher) :?>
        <?= $teacher->getFirstName()." ". $teacher->getLastName().
        " (".$teacher->getShortName().")"?>
        <?php foreach ($teacher->getClasses() as $class):?>
            <?=$class?>
        <?php endforeach;?>
        <ul>
            <?php foreach ($teacher->getSubjects() as $subject):?>
                <li>
                    <?=$subject?>
                </li>
            <?php endforeach;?>
        </ul>
    <?php endforeach;?>
    </body>
</html>