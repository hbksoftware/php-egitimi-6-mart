<?php


$arr = array(1,2,3,4,5);
var_dump($arr);
echo "</br>";
print_r($arr);

$aylar=array('ocak','şubat','mart','nisan','mayıs');

$arr = array('ad' =>'Kerim' ,"yas"=>21,"site"=>'hbksoftware.com.tr' );

echo $arr['ad'].' '.$arr['yas'].' '.$arr['site'].' '.$arr['soyad'];

$arr['ad']="Bekir Can";
$arr['soyad']="Güzel";
echo "<br/>";
echo $arr['ad'].' '.$arr['soyad'].' '.$arr['yas'].' '.$arr['site'];
echo "<br/>";
echo "<br/>";
echo "<br/>";

var_dump($arr);
echo "<br/>";
echo "<br/>";
print_r($arr);

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
?>