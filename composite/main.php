<?php

require_once 'Product.php';
require_once 'CompositeProduct.php';
require_once 'SimpleProduct.php';

$combo = new CompositeProduct('PROD-004','Perro Sencillo');

$lamina = new SimpleProduct('Prod-001','Lamina de Queso',1000);
$pan = new SimpleProduct('Prod-002','Pan de Perro',1000);
$salchicha = new SimpleProduct('Prod-003','Salchicha Sencilla',1000);

$combo->appendChild($lamina);
$combo->appendChild($pan);
$combo->appendChild($salchicha);

$perro_combo =  new CompositeProduct('PROD-0004','Perro combo');
$perro_combo->appendChild($combo);

$gaseosa = new SimpleProduct('Prod-005','Gaseosa Litro',2000);
$perro_combo->appendChild($gaseosa);

echo $perro_combo->cost();