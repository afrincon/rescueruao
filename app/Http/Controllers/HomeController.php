<?php

namespace App\Http\Controllers;

use Ivory\GoogleMap\Helper\Builder\ApiHelperBuilder;
use Ivory\GoogleMap\Helper\Builder\MapHelperBuilder;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Overlay\Marker;
use Ivory\GoogleMap\Overlay\Animation;
use Ivory\GoogleMap\Overlay\Icon;


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
        // Map Definition
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

        $mapHelperBuilder = MapHelperBuilder::create();
        $mapHelper = $mapHelperBuilder->build();

        $apiHelperBuilder = ApiHelperBuilder::create();
        //$apiHelperBuilder->setKey('AIzaSyDZTMV320Z8FMSdJN4dc29uzzqKIa2GWA0');
        $apiHelper = $apiHelperBuilder->build();

        $marker = new Marker(new Coordinate());
        $marker->setPosition(new Coordinate(3.454956, -76.5183073));
        $marker->setAnimation(Animation::DROP);
        $marker->setIcon(new Icon());
        $marker->setOption('flat', true);
        $map->getOverlayManager()->addMarker($marker);
        //dd($map);
        $mapa = $mapHelper->render($map);
        $api = $apiHelper->render([$map]);

        return view('home', compact('mapa', 'api'));
    }

}
