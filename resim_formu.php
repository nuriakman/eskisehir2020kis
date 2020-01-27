<?php

if( isset($_POST["islem"]) and $_POST["islem"] == "resim_yukle" ) {

	if ($_FILES["Dosya"]["size"] > 50 * 1024) {
	    echo "Dosya büyük!!!";
	    die();
	} 

	if($_FILES["Dosya"]["type"] <> "image/jpeg") {
		die("Sadece JPG dosyalar yüklenebilir.");
	}

	$HEDEFDOSYAADI = "uploads/" .  $_POST["YeniAd"];

	// print_r($_FILES);

	move_uploaded_file($_FILES["Dosya"]["tmp_name"], $HEDEFDOSYAADI);

	echo "<h1>Başarılı</h1>";
}

?>

<form method="post" enctype="multipart/form-data">

    Dosyanın Yeni Adı Ne Olsun?<br>
    <input required type="text" name="YeniAd" value=""><br><br>

    Yüklenecek dosyayı seçiniz:<br>
    <input required type="file" name="Dosya"><br><br>

	<input type="hidden" name="islem" value="resim_yukle">

    <input type="submit" value="Dosyayı Yükle!">

</form>