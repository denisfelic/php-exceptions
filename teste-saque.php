<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
try {
    $conta->saca(900);
} catch (SaldoInsuficienteException $exception) {
    echo "Erro na transação: {$exception->getMessage()} CODIGO: {$exception->getCode()}, Linha: {$exception->getLine()} , File: {$exception->getFile()}" . PHP_EOL;
}

echo $conta->recuperaSaldo();
