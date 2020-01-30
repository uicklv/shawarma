<?php
require_once '../vendor/autoload.php';

use \App\ShawarmaOdesskaya;
use \App\ShawarmaGovyazhaya;
use \App\ShawarmaBaranina;
use \App\ShawarmaCalculator;

//$a = new ShawarmaOdesskaya();
$c = new ShawarmaGovyazhaya();
$a = new ShawarmaBaranina();
//echo $a->getCost();
//echo '<br />';
//print_r($a->getIngredients());
//echo '<br />';
//echo $a->getTitle();
$b = new ShawarmaCalculator();
$b->add($a);
$b->add($c);
//print_r($b->getPurchase());
//echo $b->price();
print_r($b->ingredients());







