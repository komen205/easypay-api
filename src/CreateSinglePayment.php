<?php

namespace Komen205\EasypayApi;

class CreateSinglePayment
{
    public EasyPayAPI $api;
    private string $endpoint = '/single';
    private array $json = [];

    public function getJson(): array
    {
        return $this->json;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function setCurrency($currency): void
    {
        $this->json['currency'] = $currency;
    }

    public function setCostumer(string $id, string $name, string $email, string $phone, string $phone_indicative, string $fiscal_number, string $key, string $language): void
    {
        $this->json['costumer'] = [
            'id'               => $id,
            'name'             => $name,
            'email'            => $email,
            'phone'            => $phone,
            'phone_indicative' => $phone_indicative,
            'fiscal_number'    => $fiscal_number,
            'key'              => $key,
            'language'         => $language,
        ];
    }

    public function setValue(float $value)
    {
        if ($value < 0.5) {
            throw new \Exception('Value must be higher than 0.5');
        }
        $this->json['value'] = $value;
    }

    public function setType($type)
    {
        $this->json['type'] = $type;
    }

    public function setMethod($method)
    {
        $this->json['method'] = $method;
    }

    public function setCapture($transaction_key, $capture_date, $descriptive)
    {
        $this->json['capture'] = [
            'transaction_key' => $transaction_key,
            'capture_date'    => $capture_date,
            'descriptive'     => $descriptive,
        ];
    }
}
