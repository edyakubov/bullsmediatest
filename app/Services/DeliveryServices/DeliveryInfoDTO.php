<?php

namespace App\Services\DeliveryServices;

use App\Services\Client\ClientDTO;
use App\Services\Product\ParcelDTO;

class DeliveryInfoDTO
{
    private ClientDTO $recipient;
    private ParcelDTO $parcel;

    /**
     * additional info can be:
     * preferred Delivery Date,
     * Delivery Time,
     * Delivery Address,
     * Delivery Status,
     * comment  - aka DeliveryOptionsClass
    */

    public function __construct(ClientDTO $recipient, ParcelDTO $parcel)
    {
        $this->recipient = $recipient;
        $this->parcel = $parcel;
    }

    public function getRecipient(): ClientDTO
    {
        return $this->recipient;
    }

    public function getParcel(): ParcelDTO
    {
        return $this->parcel;
    }

}
