<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $error) {
        echo "Erro: {$error->getMessage()}, CODE: {$error->getCode()}" . PHP_EOL;
        echo "Arquivo: {$error->getFile()}" . PHP_EOL;
        echo "Linha: {$error->getLine()}" . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    $exception = new BadMethodCallException('TEST ERRO Exception', 2319);
    throw $exception;
    echo "oi" . PHP_EOL;


    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
