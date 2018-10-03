<?php

include 'Person.php';

$joeyS = new Person('Joey', 'Schmitz');
$joeyS->firstname = 'Joey';
$joeyS->lastname = 'Schmitz';

//echo 'Hallo ' . $joeyS->firstname . '' . $joeyS->lastname. "\n\n";

echo 'Hallo ' . strtoupper($joeyS->getFullname()). "\n\n";
