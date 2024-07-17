<?php

namespace App\Models;

use App\Services\Product\ParcelDTO;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getParcelInfo(): ParcelDTO
    {
        return new ParcelDTO(
            $this->weight,
            $this->height,
            $this->width,
            $this->depth
        );
    }
}
