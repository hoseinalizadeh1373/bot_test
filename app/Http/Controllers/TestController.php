<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class TestController extends Controller
{
    public function testing()
    {
        define("TOKEN", "5880317323:AAF8Gv573P3WDgab_r1Ydz_AJmtuyTwQOIE");

        $base_url = 'https://api.telegram.org/bot'.TOKEN.'/';

        $getme = $base_url.'getMe';

        $proxies =[
            "http"=>"139.255.45.67",

        ];
        $client = new Client([
            // Base URI is used with relative requests
        ]);
        try {
            $client->get("https://www.youtube.com");
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        

        $response = $client->request('GET', '');

        dd($response);

    }
}
