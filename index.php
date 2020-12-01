<?php
include('functions.php');
include('Classes\Invoice.php');
include('Classes\Cost.php');
include('parseXML.php');

//PHP задача 1
$num = 66;
echo "Является ли число $num простым: ";
var_dump(checkPrimeNumber($num));

echo '<br>';

//PHP задача 2
$invoice = new Classes\Invoice();
$invoice->price = 3000;
$costWithoutVAT = Classes\Cost::getCostWithoutVAT($invoice);

echo "стоимость без НДС = $costWithoutVAT <br><br>";

//XML задача 2
echo 'Массив данных по должнику: <br>';
echo '<pre>';
print_r($debtor);
echo '</pre>';

