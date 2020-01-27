
<h1>Veri Al Sayfasındayız</h1>

<h2>Gelen Veriler:</h2>

<?php

	
	require_once("db_baglantisi.php");
 

    // Sorguyu hazırlayalım
    $SORGU = $DB->prepare("INSERT INTO urunler (adi, fiyati)    VALUES (:adi, :fiyati)");

    $SORGU->bindParam(":adi", $_GET["urunadi"]);
    $SORGU->bindParam(":fiyati",  $_GET["fiyati"]);

    // SQL Sorgumuzu çalıştıralım
    $SORGU->execute();

    // İşlem tamam.
	echo "İşlem tamam.";



?>