<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class CoinTest extends TestCase
{
    use RefreshDatabase;

    public function test_coin_screen_can_be_rendered(): void
    {
        $response = $this->get('/generate-coin-contributions');

        $response->assertStatus(200);
    }

    public function test_price_value_validation(): void
    {
        $response = $this->post('/generate-coin-contributions', [
            'price' => 'abc'
        ]);

        $response->assertStatus(302);
    }

    public function test_coin_can_combined(): void
    {
        $response = $this->post('/generate-coin-contributions', [
            'price' => 12.85
        ]);

        $response->assertStatus(200);
    }
}
