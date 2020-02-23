<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use \Curl\Curl;

//未解决翻墙问题



$curl = new Curl();
$curl->get('https://www.instagram.com/p/B8em3bqlf6-/');

if ($curl->error) {
    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
} else {
    echo 'Response:' . "\n";
    var_dump($curl->response);
}