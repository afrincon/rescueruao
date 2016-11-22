<?php

namespace App\Http\Controllers;

use Ivory\GoogleMap\Helper\Builder\ApiHelperBuilder;
use Ivory\GoogleMap\Helper\Builder\MapHelperBuilder;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;


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

        $map = new Map();
        $map->setHtmlId('map_canvas');
        // Disable the auto zoom flag (disabled by default)
        $map->setAutoZoom(false);
        // Sets the center
        $map->setCenter(new Coordinate(3.454956, -76.5183073));
        // Sets the zoom
        $map->setMapOption('zoom', 12);
        $map->setMapOption('mapTypeId', MapTypeId::ROADMAP);
        $map->setHtmlAttribute('class', 'gmapuao');

        $mapHelper = MapHelperBuilder::create()->build();
        $apiHelper = ApiHelperBuilder::create()->build();

        echo $mapHelper->render($map);

        echo $apiHelper->render([$map]);

        return view('home');
    }
}
