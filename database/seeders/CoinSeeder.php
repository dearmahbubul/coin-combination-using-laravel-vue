<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRow('Silver Dollar', 1.00);
        $this->createRow('Half Dollar', 0.50);
        $this->createRow('Quarter', 0.25);
        $this->createRow('Dime', 0.10);
        $this->createRow('Nickel', 0.05);
        $this->createRow('Penny', 0.01);
    }

    public function createRow($name, $amount)
    {
        Coin::create([
            'name' => $name,
            'amount' => $amount,
        ]);
    }
}
