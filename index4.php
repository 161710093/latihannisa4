<?php
require_once 'robot4.php';

$robot1= new robot ('fanifanifani',30);
$robot2= new robot ('teoteoteoteot',50);

$robot1->set_berat(70);
$robot2->set_suara('betebetebetebete');

echo 'Berat robot adalah : '.$robot1->get_berat().'<br>';
echo 'Suara robot adalah :'.$robot2->get_suara().'<br>';