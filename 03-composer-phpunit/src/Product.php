<?php

namespace App;

class Product
{
    private const TVA_RATE = 0.2;
    private float $priceVatFree;

    public function __construct(private string $name)
    {
    }

    public function getTotalPrice(): float
    {
        return $this->priceVatFree * (1 + self::TVA_RATE);
    }

    public function setPriceVatFree(float $priceVatFree): self
    {
        $this->priceVatFree = $priceVatFree;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}