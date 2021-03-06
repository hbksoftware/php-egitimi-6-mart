<?php

$musteriler=array(
'ali'=>array(
'yas'=>21,
'sehir'=>'Istanbul'
),
'İbrahim'=>array(
'yas'=>21,
'sehir'=>'Istanbul'
),
);
$string_deger="merhaba";

echo $musteriler['ali']['yas'];
echo "<br/>";
echo $musteriler['ali']['sehir'];
$musteriler['ali']['sehir']="Tekirdağ";
$musteriler['ali']['yas']=30;
echo "<br/>";
echo "<br/>";
echo $musteriler['ali']['yas'];
echo "<br/>";
echo $musteriler['ali']['sehir'];
var_dump(is_array($musteriler));
var_dump(is_array($string_deger));





$musteriler=array(
	'ali'=>array(
		'yas'=>21,
		'sehir'=>'Istanbul'
	),
	'İbrahim'=>array(
		'yas'=>21,
		'sehir'=>'Istanbul'
	),
);
$string_deger="merhaba";
var_dump($musteriler);
unset($musteriler['ali']);

var_dump($musteriler);

?>