<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoinGenerateRequest;
use App\Services\Interfaces\CoinGeneratorInterface;
use Illuminate\Support\Facades\Redirect;
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
     * @return \Inertia\Response
     */
    public function generateCoinContributions(CoinGenerateRequest $request)
    {
        // Get the response from service
        $response = $this->coinGenerator->generateCoinContributions((float) $request->price);

        return Inertia::render('Welcome', [
            'combinations' => $response,
            'originalAmount' => $request->price,
        ]);

    }

}
