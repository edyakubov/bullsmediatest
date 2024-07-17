<?php

namespace App\Services\DeliveryServices;

final class ShipmentService
{

    private DeliveryServiceManagerInterface $deliveryService;

    public function __construct(DeliveryServiceManagerInterface $deliveryService)
    {
        $this->deliveryService = $deliveryService;
    }

    public function sendParcel(DeliveryInfoDTO $deliveryInfoDTO)
    {
        return $this->deliveryService->process($deliveryInfoDTO);
    }
}
