<?php

namespace Komen205\EasypayApi;

class Config
{
    /**
     * @var string
     */
    public string $accountId;
    /**
     * @var string
     */
    public string $apiKey;

    /**
     * @param string $accountId
     * @param string $apiKey
     */
    public function __construct(string $accountId, string $apiKey)
    {
        $this->accountId = $accountId;
        $this->apiKey = $apiKey;
    }
}
