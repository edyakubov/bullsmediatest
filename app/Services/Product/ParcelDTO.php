<?php

namespace App\Services\Product;

class ParcelDTO
{
    public float $weight;
    public int $height;
    public int $width;
    public int $depth;


    public function __construct(
        float $weight,
        int $height,
        int $width,
        int $depth
    )
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        return [
            'weight' => $this->weight,
            'height' => $this->height,
            'width' => $this->width,
            'depth' => $this->depth,
        ];
    }
}
