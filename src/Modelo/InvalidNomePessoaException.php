<?php


namespace Alura\Banco\Modelo;


use Throwable;

class InvalidNomePessoaException extends \DomainException
{
    public function __construct(string $nome)
    {
        $message = "O seguinte nome: \"$nome\", não é um nome valido.";
        parent::__construct($message);
    }
}