<?php
require_once 'autoload.php';

$u = new Usuario();

$u->cadastrar('Fabio', 31);

$p1 = new Produto();
$p2 = new Produto();

$p1->cadastrar(1, 'produto1');
$p2->cadastrar(2, 'produto2');

$c = new Compra();
$c->cadastrar(
    array(
        'p1' => $p1,
        'p2' => $p2
    ), $u
);

echo $c->imprimir();