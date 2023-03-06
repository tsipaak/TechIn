<?php
$firstName = "Janusz";
$lastName = "Nowak";
echo "Imię i nazwisko: $firstName $lastName<br>";
echo "Imię i nazwisko: $firstName $lastName<br>";

//herodoc
echo <<<'DATA'
    Imię: $firstName<br>;
    Nazwisko: $lastName<br>;
DATA;
$data = <<<DATA
    Imię: $firstName<br>;
    Nazwisko: $lastName<br>;
DATA;
// echo $data;

//nowdoc
echo <<<'DATA'
    Imię: $firstName<br>;
    Nazwisko: $lastName<br>;
DATA;

$bin = 01011;
echo $bin; //111
$oct = 011;
echo $oct; //9
$hex = 0xA1;
echo $hex; //161
?>