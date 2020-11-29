<?php

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;

require 'vendor/autoload.php';

$leilao = new Leilao('Fiat 147 0km');


$maria = new Usuario('Maria');
$joao = new Usuario('Joao');
var_dump($maria->getNome());
