<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CryptoTicker extends Component
{
    public function render()
    {
        return view('livewire.crypto-ticker');
    }
    public $price;

    public function fetchPrice() {
        $response = Http::get("https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT");
        $this->price = $response->successful() ? number_format($response->json()['price'], 2) : 'Error';
    }

}
