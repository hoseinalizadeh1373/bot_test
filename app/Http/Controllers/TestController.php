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
            "http"=>"http://181.198.62.154:999",
        ];
        $client = new Client([
            // Base URI is used with relative requests
            RequestOptions::PROXY =>$proxies,
            // RequestOptions::VERIFY => true, # disable SSL certificate validation
            // RequestOptions::TIMEOUT => 30,
        ]);
        try {
            $body = $client->get("https://api.telegram.org/")->getBody();
            echo $body->getContents();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        

        // $response = $client->request('GET', '');

        // dd($response);

    }
}
