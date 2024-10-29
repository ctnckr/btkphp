<?php 
    // Array Functions
    //$notlar = array(60,70,40,80);
    //echo count($notlar)."<br>";
    
    //$plakalar = array("41"=>"kocaeli", "34"=>"istanbul","53"=>"rize");
    //echo count($plakalar)."<br>";

    //elemanı sona ekleme
    //array_push($notlar, 100);
    //echo count($notlar)."<br>";

    //elemanı başa ekleme
    //array_unshift($notlar, 20);

    //elemanı silme - sondan
    //array_pop($plakalar);

    //eleman silme - baştan
    //array_shift($plakalar);

    //sıralama - artan
    //sort($notlar);
    //sort($plakalar); 
    //asort($plakalar); //value

    //sıralama - azalan
    //rsort($notlar);
    //rsort($plakalar);
    //arsort($plakalar); //value
    //krsort($plakalar); //key
    

    //print_r($notlar);
    //echo "<br>";
    //print_r($plakalar);

    //string to array
    // $str = "kocaeli,41";
    // $arr = explode(",", $str);
    // print_r($arr);

    //array to string
    //$arr = array("sadikturan", "mail@mail.com");
    //$str = implode(",", $arr);
    //print_r($arr);
    //echo "<br>";
    //echo $str."<br>";

    $notlar = array(60,70,40,80, 80);
    //print_r(array_count_values($notlar));

     //$plakalar = array("41"=>"kocaeli", "34"=>"istanbul","53"=>"rize");
    // print_r(array_flip($plakalar));
    
    //echo array_rand($notlar);

    print_r($notlar)."<br>";
    echo "<br>";
    //$index = array_rand($notlar);
    //echo $index."<br>";
    //echo $notlar[$index];

    $indexes = array_rand($notlar, 2);
    print_r($indexes);
    echo "<br>";
    echo $notlar[$indexes[0]]."<br>";
    echo $notlar[$indexes[1]]."<br>";

    //https://www.w3schools.com/php/php_arrays_functions.asp




?>