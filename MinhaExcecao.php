<?php


class MinhaExcecao extends DomainException
{
    public function exibeNomeDenis()
    {
        echo  "Denis" . PHP_EOL;
    }
}

try {
    throw new MinhaExcecao();
}
catch (MinhaExcecao $e){
    $e->exibeNomeDenis();
}