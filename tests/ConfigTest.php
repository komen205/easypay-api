<?php

namespace Komen205\EasypayApi\Tests;

use Komen205\EasypayApi\EasyPayAPI;
use Komen205\EasypayApi\Config;
use PHPUnit\Framework\TestCase;

abstract class ConfigTest extends TestCase
{
    private EasyPayAPI $easypay;

    protected function getEasyPay(): EasyPayAPI
    {
        return $this->easypay = new EasyPayAPI(new Config('account_id', 'api_key'));
    }

}