<?php

namespace Komen205\EasypayApi\Payment;

use GuzzleHttp\Promise\Create;

class CreateSinglePayment
{
    /**
     * @var EasyPayAPI
     */
    public EasyPayAPI $api;
    /**
     * @var string
     */
    private string $endpoint = '/single';
    /**
     * @var array
     */
    private array $json = [];

    /**
     * @return array
     */
    public function getJson(): array
    {
        return $this->json;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param string $currency
     * @return CreateSinglePayment
     */
    public function setCurrency(string $currency): CreateSinglePayment
    {
        $this->json['currency'] = $currency;
        return $this;
    }

    /**
     * @param CustomerInfo $customer
     * @return CreateSinglePayment
     */
    public function setCustomer(CustomerInfo $customer): CreateSinglePayment
    {
        $this->json['customer'] = [
            'id' => $customer->getId(),
            'name' => $customer->getName(),
            'email' => $customer->getEmail(),
            'phone' => $customer->getPhone(),
            'phone_indicative' => $customer->getPhoneIndicative(),
            'fiscal_number' => $customer->getFiscalNumber(),
            'key' => $customer->getKey(),
            'language' => $customer->getLanguage(),
        ];
        return $this;
    }

    /**
     * @param float $value
     * @return CreateSinglePayment
     * @throws \Exception
     */
    public function setValue(float $value): CreateSinglePayment
    {
        if ($value < 0.5) {
            throw new \Exception('Value must be higher than 0.5');
        }
        $this->json['value'] = $value;
        return $this;
    }

    /**
     * @param string $type
     * @return CreateSinglePayment
     */
    public function setType(string $type): CreateSinglePayment
    {
        $this->json['type'] = $type;
        return $this;
    }

    /**
     * @param string $method
     * @return CreateSinglePayment
     */
    public function setMethod(string $method): CreateSinglePayment
    {
        $this->json['method'] = $method;
        return $this;
    }

    /**
     * @param string $transaction_key
     * @param string $capture_date
     * @param string $descriptive
     * @return CreateSinglePayment
     */
    public function setCapture(string $transaction_key, string $capture_date, string $descriptive): CreateSinglePayment
    {
        $this->json['capture'] = [
            'transaction_key' => $transaction_key,
            'capture_date' => $capture_date,
            'descriptive' => $descriptive,
        ];
        return $this;
    }
}
