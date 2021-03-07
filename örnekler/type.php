<?php
$site= "Basaksehir.com";
$sayi=25;
$sayi2="25";
echo gettype($site)."<br/>".gettype($sayi)."<br/>".gettype($sayi2);
echo "<br/>";
echo "<br/>";
$sayi_string2=settype($sayi,"string");
$sayi_string=strval($sayi);
$sayi_integer=intval($sayi2);
echo gettype($site)."<br/>".gettype($sayi_string)."<br/>".gettype($sayi_integer)."<br/>".gettype($sayi_string2);
?>
