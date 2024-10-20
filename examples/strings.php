<?php
$ad = "çınar";
$soyad = "Turan";
$yas= 16;

$mesaj1 = "my name is ".$ad.' '.$soyad." and ".$yas." years old.";
$mesaj2 = "My name is {$ad} {$soyad} and {$yas} years old.";
$mesaj3 = "My name is $ad $soyad and $yas years old.";
echo $mesaj1;
echo "<br>";
echo $mesaj2;
echo "<br>";
echo $mesaj3."<br>";
echo $mesaj1[0]."<br>";
echo $mesaj1[6]."<br>";
echo $mesaj1[-7]."<br>";

//String fonksiyonları
echo strlen($mesaj1)."<br>"; //karakter sayısını bulur.
echo str_word_count($mesaj1)."<br>"; //kelime sayısını bulur.
echo strtolower($mesaj1)."<br>"; //bütün harfleri küçük yapar.
echo strtoupper($mesaj1)."<br>"; //bütün harfleri büyük yapar.
echo ucfirst($mesaj1)."<br>"; //İlk kelimenin ilk harfini büyük yapar.
echo str_replace("çınar", "sadık", $mesaj1)."<br>"; //ilk kelime yerine ikinci kelimeyi yazar
echo str_replace(["çınar","16"], ["sadık","33"],$mesaj1)."<br>"; //birden fazla parametre için, ilk kelime yerine ikinci kelimeyi yazar


?>