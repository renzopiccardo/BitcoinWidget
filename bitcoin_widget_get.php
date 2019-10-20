<?php
    require __DIR__ . '/vendor/autoload.php';

    $url = "https://api.coindesk.com/v1/bpi/currentprice.json";

    function getBitcoinPrices(){
        global $url;

        $client = new \GuzzleHttp\Client([$url => $url,'verify' => false]);
        $response = $client->request('GET', $url);

        $result = json_decode($response->getBody(), true);
        $currencies = $result['bpi'];

        return $currencies;
    }


?>