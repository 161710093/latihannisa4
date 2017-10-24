<?php

require_once 'identitas4.php';
$identitas = new identitas('Felysa','Bandung','XI RPL 2');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>"."<br>";

$identitas = new identitas('Nisa','Jakarta','XI RPL 1');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>"."<br>";

$identitas = new identitas('dilya','Garut','XI TKR 1');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>"."<br>";

$identitas = new identitas('Nifi','Majalengka','XI TKR 2');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>"."<br>";


$identitas = new identitas('Alex','Sumedang','XI TSM 2');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>"."<br>";


?>