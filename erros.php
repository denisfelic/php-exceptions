<?php

// Função para controlar os nossos próprios erros
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING :
            // throw new Exception("Warning");
            echo "WARNING: Isso será descontinuado!" . PHP_EOL;
            break;
        case E_NOTICE :
            //throw new Exception("NOTICE");
            echo  "NOTICE: Melhor não fazer isso" . PHP_EOL;
            break;
    }

});
// https://www.php.net/manual/en/errorfunc.constants.php -> lista completa de todos os tipos de erros

// Também pode ser modificado no php.ini para exibir todos os tipos de erros.
error_reporting(E_ALL);

// Configuração para produção: Não será exibido erros para o usuário, porem sera capturado os logs
// ini_set('display_errors', 0);
// ini_set('log_errors' , 1);
// ini_set('error_log', '/minha-app/log/arquivo');


// Tipos de erros fora exception ou error
// Notice
echo $msg;
echo $array[12];
// echo  @$array[12];  -> remove o lançamento de erro ( péssima pratica )


// Warning -> Quer dizer que agora ainda funciona, mas em uma versão futura do PHP deixara de funcionar

echo 2 / 0;
echo CONSTANTE_INEXISTENTE;


