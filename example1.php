<?php

include "autoloader.php";

use \nl\mondriaan\ict\Employee as Employee;

$employee= new Employee("Jan van", "Vliet");
echo "Mijn naam is ".$employee->getFirstName()." ".$employee->getLastName();