<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular as TitularAlias;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco as EnderecoAlias;

require_once 'autoload.php';


$contaCorrente = new ContaCorrente(
    new TitularAlias(
        new CPF('233.312.323-03'),
        'Michael Jacksson',
        new EnderecoAlias('São Paulo', 'Sé', 'Rua central', '21')
    ));

$contaCorrente->deposita(-200);