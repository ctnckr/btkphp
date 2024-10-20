<?php
/*
Php Veri Türleri

string  : Metinsel bilgiler
int     : tam sayılar
double  : ondalıklı sayılar
boolen  : true/false bilgi
object  : nesne
array   : dizi
null    : değer içermeyen bilgi
*/

$urunAdi = "Pocof1";
echo $urunAdi." : ". gettype($urunAdi);

echo "<br>";

$fiyat = 10000;
echo $fiyat . ' : ' . gettype($fiyat);

echo "<br>";

$kdvOrani = 0.18;
echo $kdvOrani . ' : ' . gettype($kdvOrani);

echo "<br>";

$satistaMi = false;
echo $satistaMi . ' : ' . gettype($satistaMi);

echo "<br>";

$a = (int)20.5;
echo gettype($a);
echo $a;

echo "<br>";

$a = (int)"20";
echo gettype($a);
echo $a;

echo "<br>";

$a = (int)"a20";
echo gettype($a);
echo $a;

echo "<br>";

$a = (int)"20a50";
echo gettype($a);
echo $a;

echo "<br>";

$a = true;
echo gettype($a);
echo $a;

echo "<br>";

$a = false;
echo gettype($a);
echo $a;

echo "<br>";

$a = (int)false;
echo gettype($a);
echo $a;


?>

