<?php
 class perkalian{
 	public $bil1,$bil2;

 	function set_nilai2($bilangan1,$bilangan2){
 		$this->bil1=$bilangan1;
 		$this->bil2=$bilangan2;
 	}
	function get_nilai2 (){
 		return $this->bil1 * $this->bil2;
 	}
 }

 $perkalian1 = new perkalian;
 $perkalian1->set_nilai2(18,2);
 echo "===============================".'<br>';
 echo "Perhitungan bilangan 18 dengan bilangan 2".'<br>';
 echo "===============================".'<br>';
 echo "Hasil Perkalian :".$perkalian1->get_nilai2().'<br>';
?>
