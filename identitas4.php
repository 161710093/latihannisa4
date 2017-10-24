<?php
class identitas{
	public $nama;
	public $tempatlahir;
	public $kelas;

	public function __construct($n,$t,$k){
		$this->nama=$n;
		$this->tempatlahir=$t;
		$this->kelas=$k;
	}
	public function get_nama(){
		return $this->nama;
	}
	public function get_tempatlahir(){
		return $this->tempatlahir;
	}
	public function get_kelas(){
		return $this->kelas;
	}
}
?>