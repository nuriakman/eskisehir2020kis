# NOTLAR

Burada kamp sırasındaki örnekler yer almaktadır.

## İçerikler

- Fonksiyonlar
- MySQL PDO
- Resim Yükleme

### Örnek Fonksiyon Kodu:
```PHP
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
```


Önerilen site: https://stackedit.io/app


