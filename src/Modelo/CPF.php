<?php

namespace Alura\Banco\Modelo;

use Exception;
use InvalidArgumentException;

final class CPF
{
    private $numero;

    /**
     * CPF constructor.
     * @param string $numero
     * @throws InvalidArgumentException
     */
    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            throw new InvalidArgumentException("O número do CPF não é valido.");
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
