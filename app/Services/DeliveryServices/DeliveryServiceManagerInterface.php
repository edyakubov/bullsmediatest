<?php

namespace App\Services\DeliveryServices;

interface DeliveryServiceManagerInterface
{
    public function process(DeliveryInfoDTO $data);
}
