<?php

namespace Komen205\EasypayApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;

class EasyPayAPI
{
    /**
     * @var Config
     */
    protected Config $config;
    /**
     * @var Client
     */
    protected Client $client;
    /**
     * @var array
     */
    protected array $json;
    /**
     * @var ResponseInterface
     */
    protected ResponseInterface $response;
    /**
     * @var string
     */
    private string $endpoint = 'https://api.test.easypay.pt/2.0';

    /**
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->client = new Client();
    }

    /**
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(): ResponseInterface
    {
        if (empty($this->json)) {
            throw new \Exception('Request json is empty.');
        }

        try {
            $response = $this->client->post($this->endpoint, ['headers' => [
                'AccountId' => $this->config->accountId,
                'ApiKey' => $this->config->apiKey,
            ], 'json' => $this->json]);
        } catch (ClientException $e) {
            throw new \Exception(Psr7\Message::toString($e->getResponse()));
        }

        return $response;
    }

    /**
     * @param string $endpoint
     * @return EasyPayAPI
     */
    public function setEndpoint(string $endpoint): EasyPayAPI
    {
        $this->endpoint = $this->endpoint . $endpoint;
        return $this;
    }

    /**
     * @param array $json
     * @return EasyPayAPI
     */
    public function setJson(array $json): EasyPayAPI
    {
        $this->json = $json;
        return $this;
    }
}
