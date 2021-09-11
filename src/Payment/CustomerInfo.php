<?php

namespace Komen205\EasypayApi\Payment;

class CustomerInfo
{
    /**
     * @var string
     */
    private string $id;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $email;
    /**
     * @var string
     */
    private string $phone;
    /**
     * @var string
     */
    private string $phone_indicative;
    /**
     * @var string
     */
    private string $fiscal_number;
    /**
     * @var string
     */
    private string $key;
    /**
     * @var string
     */
    private string $language;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (empty($this->id)) {
            return '';
        }

        return $this->id;
    }

    /**
     * @param string $id
     * @return CustomerInfo
     */
    public function setId(string $id): CustomerInfo
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CustomerInfo
     */
    public function setName(string $name): CustomerInfo
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return CustomerInfo
     */
    public function setEmail(string $email): CustomerInfo
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return CustomerInfo
     */
    public function setPhone(string $phone): CustomerInfo
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneIndicative(): string
    {
        return $this->phone_indicative;
    }

    /**
     * @param string $phone_indicative
     * @return CustomerInfo
     */
    public function setPhoneIndicative(string $phone_indicative): CustomerInfo
    {
        $this->phone_indicative = $phone_indicative;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiscalNumber(): string
    {
        return $this->fiscal_number;
    }

    /**
     * @param string $fiscal_number
     * @return CustomerInfo
     */
    public function setFiscalNumber(string $fiscal_number): CustomerInfo
    {
        $this->fiscal_number = $fiscal_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return CustomerInfo
     */
    public function setKey(string $key): CustomerInfo
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return CustomerInfo
     */
    public function setLanguage(string $language): CustomerInfo
    {
        $this->language = $language;
        return $this;
    }


}