<?php

namespace App\Services;

use App\Models\Coin;
use App\Services\Interfaces\CoinGeneratorInterface;

class CoinGeneratorService implements CoinGeneratorInterface
{
    private Coin $coin;

    public function __construct(Coin $coin)
    {

        $this->coin = $coin;
    }

    /**
     * @inheritDoc
     */
    public function generateCoinContributions($price)
    {
        $coins = $this->getCoins();
//        $response = $this->getGeneratedCoins($price, $coins);
        $response = $this->coinChange($coins, $price);
        dd($response);
    }

    private function getCoins()
    {
        return $this->coin
            ->orderBy('amount', 'desc')
            ->select(['id', 'name', 'amount'])
            ->get();
    }

    private function getGeneratedCoins($price, $coins)
    {

    }
}
