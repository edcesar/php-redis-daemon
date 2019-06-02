<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \Superbalist\PubSub\Redis\RedisPubSubAdapter;
use PensandoEmSoftware\RotinasAposCadastro;

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host' => 'localhost',
    'port' => 6379,
    'database' => 0,
    'read_write_timeout' => 0,
]);

$adapter = new RedisPubSubAdapter($client);

$adapter->subscribe('rotinas.apos.cadastro', function ($dados) {

    RotinasAposCadastro::getInstance()
    ->validaSerasa()
    ->validaInstituicoesFinanceiras()
    ->validaAntecedentesCriminais()
    ->enviaEmail();
    
    file_put_contents(__DIR__ .'/logs.log', $dados, FILE_APPEND);
});

