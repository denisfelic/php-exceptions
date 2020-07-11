<?php


namespace Alura\Banco\Modelo\Conta;


use Throwable;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoConta)
    {
        $message = "Você tentou sacar $valorSaque, mas tem apenas $saldoConta na conta.";
        parent::__construct($message);
    }
}