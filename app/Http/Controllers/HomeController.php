<?php

namespace App\Http\Controllers;

use Ivory\GoogleMap\Service\Geocoder\GeocoderService;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Ivory\GoogleMap\Service\Geocoder\Request\GeocoderAddressRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geocoder = new GeocoderService(new Client(), new GuzzleMessageFactory());
        $request = new GeocoderAddressRequest('1600 Amphitheatre Parkway, Mountain View, CA');
        $response = $geocoder->geocode($request);

        dd($response);

        return view('home');
    }
}
