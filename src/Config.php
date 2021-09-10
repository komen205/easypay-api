<?php

namespace Komen205\EasypayApi;



class Config
{
    public string $accountId;
    public string $apiKey;

    public function __construct(string $accountId, string $apiKey)
    {
        $this->accountId = $accountId;
        $this->apiKey = $apiKey;   
    }
}