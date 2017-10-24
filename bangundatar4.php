<?php
 class bangundatar{
 	public $p,$l;
 	public $s;

 	function set_luas1($panjang,$lebar){
 		$this->p=$panjang;
 		$this->l=$lebar;
 	}
 	function get_luas1 (){
 		return $this->p * $this->l;
 	}
 	function get_luas11 (){
 		return 2 * $this->p + 2 * $this->l;
 	}
 	function set_luas2($sisi){
 		$this->s=$sisi;
 	}
 	function get_luas2(){
 		return 2 * $this->s;
 	}
 	function get_luas22(){
 		return 4 * $this->s;
 	}
 }
 $bangundatar = new bangundatar;
 $bangundatar->set_luas1(10,20);
 $bangundatar->set_luas2(30);
 echo "Luas Persegi Panjang :".$bangundatar->get_luas1().'<br>';
 echo "Keliling Persegi Panjang :".$bangundatar->get_luas11().'<br>';
 echo "Luas Persegi :".$bangundatar->get_luas2().'<br>';
 echo "Keliling Persegi :".$bangundatar->get_luas22().'<br>';
?>