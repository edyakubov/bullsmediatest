<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShipmentOrderRequest;
use App\Models\Product;
use App\Services\Client\ClientDTO;
use App\Services\DeliveryServices\DeliveryInfoDTO;
use App\Services\DeliveryServices\ShipmentService;

final class DeliveryController extends Controller
{

    public function __construct(private readonly ShipmentService $shipmentService)
    {
    }

    /**
     * The Product should be passed as a relation of Order, that was bought,
     * but for quick example I will pass it as a parameter
     *
     * if shipment services will be more than one, we can use Manager/Driver pattern - accept the type of service and process it via manager-class
     */

    public function store(Product $product, CreateShipmentOrderRequest $request)
    {
        //the client info can be taken from the auth user (if we have registration in app)  or from the request
        $data = new DeliveryInfoDTO(
            new ClientDTO(
                $request->get('name'),
                $request->get('email'),
                $request->get('phone'),
                config('app.shipment_address'),
                $request->delivery_address
            ),
            parcel: $product->getParcelInfo()
        );
        $parcelInfo = $this->shipmentService->sendParcel($data);
        return response()->json(
            [
                'message' => 'Shipment order created with some date (TTN, STATUS)',
                'parcel' => $parcelInfo
            ], 201);
    }
}
