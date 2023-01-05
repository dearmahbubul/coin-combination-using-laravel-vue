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
    public function generateCoinContributions($originalAmount)
    {
        // Get system coins from database
        $coins = $this->getCoins();
        // Get a pair of coins
        return $this->getGeneratedCoins($originalAmount, $coins);
    }

    private function getCoins()
    {
        return $this->coin
            ->orderBy('amount', 'desc')
            ->select(['id', 'name', 'amount'])
            ->get();
    }

    private function getGeneratedCoins($originalAmount, $coins)
    {
        $distributions = [];

        foreach ($coins as $coin) {
            $coinAmount = (float) $coin->amount;
            $originalAmount = number_format($originalAmount, 2);

            if ($originalAmount >= $coinAmount) {

                $distribute = $originalAmount / $coinAmount;
                $originalAmount -= intval($distribute) * $coinAmount;

                $distributions[] = [
                    'name' => $coin->name,
                    'total' => (int) $distribute,
                    'amount' => number_format($coin->amount,2)
                ];

            } else {
                $distributions[] = [
                    'name' => $coin->name,
                    'total' => 0,
                    'amount' => number_format($coin->amount, 2)
                ];
            }
        }

        return $distributions;
    }
}
