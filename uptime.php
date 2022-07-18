<?php

require __DIR__.'/vendor/autoload.php';

use App\Comunication\Alert;

try {
    $url = 'https://github.com/1guilherme1python1';

    $curl = curl_init($url);
    curl_setopt_array($curl,[
        CURLOPT_HEADER => true,
        CURLOPT_NOBODY => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10
    ]);

    curl_exec($curl);

    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    if($httpCode != 200){
        throw new Exception("Site fora do ar", 404);
    }
    Alert::sendMessage("Site no AR");

} catch (\Exception $e) {
    Alert::sendMessage($e->getCode().': '.$e->getMessage());
}