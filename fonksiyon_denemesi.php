<?php

$EtkiVize  = 0.30;
$EtkiFinal = 0.70;
$EtkiBaraj = 45;

$SAYI = 5;


function Durum($vize, $final) {
	global $EtkiVize, $EtkiFinal, $EtkiBaraj;

	$SAYI = 120;

	$Ort = $vize * $EtkiVize + $final * $EtkiFinal;

	if($Ort >= $EtkiBaraj ) {
		return "Geçti";
	} else {
		return "Kaldı";
	}

}

echo $SAYI;

$cevap = Durum(70, 80);
echo "Durum: $cevap"; 

echo "<hr>";




function Sorgulama($vize, $final, $Etki1=0.30, $Etki2=0.70, $Baraj=50) {

	$Ort = $vize * $Etki1 + $final * $Etki2;

	if($Ort >= $Baraj ) {
		return array($Ort, "Geçti");
	} else {
		return array($Ort, "Kaldı");
	}

}


$cevap = Sorgulama(45, 60);
$ORTALAMA = $cevap[0];
$SONUC    = $cevap[1];
echo "Bu öğrenci $ORTALAMA ortalaması ile $SONUC";
echo "<br>";


list($ORTALAMA, $SONUC) = Sorgulama(40, 54);
echo "Bu öğrenci $ORTALAMA ortalaması ile $SONUC";


