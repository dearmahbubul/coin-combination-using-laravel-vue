<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoinGenerateRequest;
use App\Http\Requests\UpdateCoinRequest;
use App\Models\Coin;
use App\Services\CoinGeneratorService;
use App\Services\Interfaces\CoinGeneratorInterface;
use Inertia\Inertia;

class CoinGeneratorController extends Controller
{

    private CoinGeneratorInterface $coinGenerator;

    public function __construct(CoinGeneratorInterface $coinGenerator)
    {

        $this->coinGenerator = $coinGenerator;
    }

    /**
     * Display the coin contribution page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Welcome');
    }

    /**
     * Generate the coin combinations and return response of coins
     *
     * @param  \App\Http\Requests\CoinGenerateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function generateCoinContributions(CoinGenerateRequest $request)
    {
        $response = $this->coinGenerator->generateCoinContributions($request->price);
    }

}
