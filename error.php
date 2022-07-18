<?php

require __DIR__.'/vendor/autoload.php';

use App\Comunication\Alert;

try {
    $argv = $_GET['number'];
    $codigo = $argv ?? 0;
    if($codigo != 1){
        throw new \Exception("boa noite ze ruela", 111);
    } 
    echo "Sucesso";
    Alert::sendMessage("sucesso");
} catch (\Exception $e) {
    echo $e->getMessage()."\n";

    Alert::sendMessage($e->getCode().': '.$e->getMessage());
}