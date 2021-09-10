<?php

namespace Komen205\EasypayApi;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\ResponseInterface;

class EasyPayAPI
{

    protected Config $config;
    protected Client $client;
    protected array $json;
    protected ResponseInterface $response;
    private string $endpoint = 'https://api.test.easypay.pt/2.0';

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->client = new Client();
    }

    public function request()
    {
        if (empty($this->json)) {
            throw new \Exception('Json is empty.');
        }
        return $this->client->post($this->endpoint, ['headers' => [
            'AccountId' => $this->config->accountId,
            'ApiKey' => $this->config->apiKey,
        ], 'json' => $this->json]);
    }

    public function setEndpoint($endpoint)
    {
        $this->endpoint = $this->endpoint . $endpoint;
    }

    public function setJson($json): void
    {
        $this->json = $json;
    }

}
