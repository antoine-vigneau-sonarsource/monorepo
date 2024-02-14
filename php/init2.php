
<?php
$have_time = true;
$have_money = false;
$take_vacation = $have_time and $have_money;  // Noncompliant. $take_vacation == true.

if (count($a) > 0) { // Noncompliant
 echo $a[0];
}

eval($code_to_be_dynamically_executed);



$fileName = $_GET["filename"];

file_get_contents($fileName); // Noncompliant

