<?php

namespace App\Comunication;

use TelegramBot\Api\BotApi;

class Alert{
    /**
     * Token de acesso ao Bot
     */
    const TELEGRAM_BOT_TOKEN = '5540287800:AAFe2PzZ8w_MVRPXQQWNYXdV01kSN4YzCvM';

    /**
     * ID da conversa com o bot
     */
    const TELEGRAM_CHAAT_ID = 1075469335;

    /**
     * Método responsável por enviar a mensagem de alerta
     */
    public static function sendMessage($message){
        //INSTANCIA COM O TOKEN DO BOT GERADO;
        $obBotApi = new BotApi(self::TELEGRAM_BOT_TOKEN);
        //envia a mensagem para o telegram
        return $obBotApi->sendMessage(self::TELEGRAM_CHAAT_ID, $message);
    }
}