<?php

namespace Komen205\EasypayApi\Tests;

use Komen205\EasypayApi\Config;
use Komen205\EasypayApi\EasyPayAPI;
use Komen205\EasypayApi\CreateSinglePayment;
use PHPUnit\Framework\TestCase;

class EasyPayApiTest extends ConfigTest
{

    /** @test */
    public function it_creates_frequent_payment()
    {
        $singlePayment = new CreateSinglePayment();
        $singlePayment->setCurrency('EUR');
        $singlePayment->setCostumer('22ea3cc9-424b-489a-91b7-8955f643dc93', 'Customer Example', 'customer@example.com', '911234567', '+351', 'PT123456789', 'Key Example', 'PT');
        $singlePayment->setMethod('mb');
        $singlePayment->setType('sale');
        $singlePayment->setValue(0.5);
        $singlePayment->setCapture("string", "2006-01-02", "Descriptive Example");


        $easypay = $this->getEasyPay();
        $easypay->setEndpoint($singlePayment->getEndpoint());
        $easypay->setJson($singlePayment->getJson());

        $this->assertEquals(201, $easypay->request()->getStatusCode());

    }
}
