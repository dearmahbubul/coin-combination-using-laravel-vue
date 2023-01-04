<?php

namespace App\Services\Interfaces;

interface CoinGeneratorInterface
{
    /**
     * @info This function is used to generate combination
     * @param $originalAmount
     * @return mixed
     */
    public function generateCoinContributions($originalAmount);
}
