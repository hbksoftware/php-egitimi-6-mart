<?php
function selam(){

 echo 'Selam!';
}

selam();

function selam_ver($name){

 echo $name.' Selam!';
}

selam_ver("Batuhan Bey");

function selam_ver2($name="Misafir"){

 echo $name.' Selam!';
}

selam_ver2();

function selam_ver3($name="Misafir"){

 echo $name.' Selam!';
}
function topla($sayi1,$sayi2){
return $sayi1+$sayi2;
}
selam_ver3();
echo topla(15,5);
?>