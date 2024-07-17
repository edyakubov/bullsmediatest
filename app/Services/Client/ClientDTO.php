<?php

namespace App\Services\Client;

class ClientDTO
{
    private string $customer_name;
    private string $phone_number;
    private string $email;
    private string $sender_address;
    private string $delivery_address;

    public function __construct(
        string $customer_name,
        string $phone_number,
        string $email,
        string $sender_address,
        string $delivery_address
    )
    {
        $this->customer_name = $customer_name;
        $this->phone_number = $phone_number;
        $this->email = $email;
        $this->sender_address = $sender_address;
        $this->delivery_address = $delivery_address;
    }

    public function asArray()
    {
        return [
            'customer_name' => $this->customer_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'sender_address' => $this->sender_address,
            'delivery_address' => $this->delivery_address
        ];
    }
}
