<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;

$client = new Client(['base_uri' => $_ENV['ACTIVE_CAMPAIGN_API_ENDPOINT']]);

$sendGetReq = function($path, $params = []) use ($client) {
    try {
        return json_decode((string) $client->request('GET', $path, [
            'headers' => [
                'Api-Token' => $_ENV['ACTIVE_CAMPAIGN_API_KEY']
            ],
            'query' => array_merge([
                'limit' => 100
            ], $params)
        ])->getBody());
    }
    catch (ClientException $e) {
        echo Psr7\str($e->getRequest());
        echo Psr7\str($e->getResponse());
        exit;
    }
    catch (Exception $e) {
        throw $e;
    }
};