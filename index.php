<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new Predis\Client();

$adapter = new \Superbalist\PubSub\Redis\RedisPubSubAdapter($client);

$adapter->publish('rotinas.apos.cadastro', json_encode([
    'nome' => 'Joana Joaquina',
    'cpf' => '123.456.789-10',
    'cartaoCredito' => '0000000000000',
], JSON_PRETTY_PRINT));
