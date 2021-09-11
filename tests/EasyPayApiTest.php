<?php

namespace Komen205\EasypayApi\Tests;

use Komen205\EasypayApi\Payment\CreateSinglePayment;
use Komen205\EasypayApi\Payment\CustomerInfo;

class EasyPayApiTest extends ConfigTest
{
    /** @test */
    public function it_creates_frequent_payment()
    {
        $customer = new CustomerInfo();
        $customer->setEmail('customer@example.com');
        $customer->setName('CustomerInfo Example');
        $customer->setPhone('911234567');
        $customer->setPhoneIndicative('+351');
        $customer->setFiscalNumber('PT123456789');
        $customer->setKey('Key Example');
        $customer->setLanguage('PT');

        $singlePayment = new CreateSinglePayment();
        $singlePayment->setCurrency('EUR');
        $singlePayment->setCustomer($customer);
        $singlePayment->setMethod('mb');
        $singlePayment->setType('sale');
        $singlePayment->setValue(0.5);
        $singlePayment->setCapture('string', '2006-01-02', 'Descriptive Example');

        $easypay = $this->getEasyPay();
        $easypay->setEndpoint($singlePayment->getEndpoint());
        $easypay->setJson($singlePayment->getJson());

        $this->assertEquals(201, $easypay->request()->getStatusCode());
    }
}
