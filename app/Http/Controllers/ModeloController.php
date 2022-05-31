<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request)
    {
        $autos =
        [
            "CHEVROLET"=>'TRACKER',
            "MAZDA"=>'323',
            "FORD"=>'RANGER',
            "KIA"=>'SPORTAGE',
            "GREAT WALL"=>'WINGLE'
        ];
        $nombre = "Byron";
        return view('modelos',compact('autos','nombre'));
    }
}
