<?php

class ayam{
	public $suara = "kukukuruyuk";
	public $kaki = 2;
}
$ayam1 = new ayam;
echo "Saya mempunyai empat ayam ia bersuara : ".$ayam1->suara. '<br>';
echo "Dan berjalan dengan  : ".$ayam1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class jerapah{
	public $suara = "iiihhaaa";
	public $kaki = 4;
}
 $jerapah1 = new jerapah;
echo "Saya mempunyai jerapah ia bersuara : ". $jerapah1->suara. '<br>';
echo "Dan berjalan dengan  : ". $jerapah1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class buaya{
	public $makan = "daging";
	public $jalan= "merangkak";
}
$buaya1 = new buaya;
echo "Saya memelihara buaya ia bersuara : ".$buaya1->makan. '<br>';
echo "Dan berjalan dengan  : " .$buaya1->jalan.'dengan kakinya yang pendek'; 
echo "<br>". "<br>";
?>