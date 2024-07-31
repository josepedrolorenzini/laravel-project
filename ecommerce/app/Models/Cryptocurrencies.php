<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cryptocurrencies extends Model
{
    use HasFactory;
    //https://developer.coingate.com/reference/currencies

    public function getAllCryptocurrencies()
    {
        $response = file_get_contents('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        $data = json_decode($response, true);
        return $data;
    }

    public function getCryptocurrency()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.coingate.com/api/v2/currencies', [
            'headers' => [
                'accept' => 'application/json',
            ],
        ]);
       // dd($response->getBody()->getContents());
       $data = json_decode($response->getBody()->getContents() , true);
       foreach ($data as $coin){
        //    echo $coin->id . " - " . $coin->name . "<br>";
           // dd($coin);
           echo $coin['title'];
       }
    //    echo $response->getBody()->getContents();
    }
}
