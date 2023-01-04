<?php

namespace App\Services\Interfaces;

interface CoinGeneratorInterface
{
    /**
     * @param $price
     * @return mixed
     */
    public function generateCoinContributions($price);
}
