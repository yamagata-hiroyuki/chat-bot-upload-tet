<?php
    //トーク Bot リスト照会 要求
    class BotListReqStruct{
        public $propaty = Array();
        public $header = Array(
            "Content-Type" => "",
            "charset" => "",
            "consumerKey" => CONSUMER_KEY,
            "Authorization" => HTTP_H_AUTH
        );
    }

    //サーバートークン要求
    class ServerTokenReqStruct{
        public $propaty = Array(
            "grant_type" => "",
            "assertion" => ""
        );
        public $header = Array(
            "Content-Type" => ""
        );
    }








?>