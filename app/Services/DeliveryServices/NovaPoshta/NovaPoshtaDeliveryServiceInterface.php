<?php

namespace App\Services\DeliveryServices\NovaPoshta;

use App\Services\DeliveryServices\DeliveryServiceManagerInterface;
use App\Services\DeliveryServices\DeliveryInfoDTO;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NovaPoshtaDeliveryServiceInterface implements DeliveryServiceManagerInterface
{

    const URL = 'https://novaposhta.test/api/delivery';

    public function process(DeliveryInfoDTO $data): array
    {
        $response = Http::post(self::URL,
            //can be mapped here or another DTO object that works for NovaPoshta
            array_merge($data->getParcel()->asArray(), $data->getRecipient()->asArray())
        )
            ->throw();
        if ($response->failed()) {
            Log::error('Nova Poshta delivery failed', ['response' => $response->json()]);
            throw new NovaPoshtaException('Nova Poshta delivery failed');
        }

        return $response->json();

    }

}
