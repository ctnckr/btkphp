<?php 
    $ogrenciA = array("Ahmet", array(50,80,90));
    $ogrenciB = array("Mehmet", array(60,50,70));

    echo $ogrenciA[0]."<br>";
    echo $ogrenciA[1][0]."<br>";
    echo $ogrenciA[1][1]."<br>";
    echo $ogrenciA[1][2]."<br>";

    $ogrenciA_ortalama = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
    echo $ogrenciA_ortalama."<br>";

    echo "<br>";

    echo $ogrenciB[0]."<br>";
    echo $ogrenciB[1][0]."<br>";
    echo $ogrenciB[1][1]."<br>";
    echo $ogrenciB[1][2]."<br>";
    $ogrenciB_ortalama = ($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2]) / 3;
    echo $ogrenciB_ortalama."<br>";

    echo " -----  <br>";

    $sinif = array(
        "100" => array(
            "ad" => "Mehmet",
            "soyad" => "Yılmaz",
            "notlar" => array(
                "matematik" => array(50,70,80),
                "fizik" => array(40,75,90),
                "kimya" => array(55,66,83)
            )
            ),
        "200" => array(
            "ad" => "Hasan",
            "soyad" => "Yılmazer",
            "notlar" => array(
                "matematik" => array(22,55,77),
                "fizik" => array(44,75,99),
                "kimya" => array(66,88,88)
            )
        )
    );

    echo$sinif["100"]["ad"]."<br>";
    echo$sinif["100"]["soyad"]."<br>";
    echo$sinif["100"]["notlar"]["matematik"][0]."<br>";
    echo$sinif["100"]["notlar"]["matematik"][1]."<br>";
    echo$sinif["100"]["notlar"]["matematik"][2]."<br>";

    echo "200 No.lu Öğrencinin Kimya Not Ortalaması:"."<br>";
    $not1 = $sinif["200"]["notlar"]["kimya"][0];
    $not2 = $sinif["200"]["notlar"]["kimya"][1];
    $not3 = $sinif["200"]["notlar"]["kimya"][2];
    $kimya_ortalama = ($not1 + $not2 + $not3)/3;
    echo $kimya_ortalama;


?>