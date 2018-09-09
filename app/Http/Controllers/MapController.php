<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    
    /**
     * Returns the map page!
     * 
     */
    public function map() {
        return view('map');
    }

}
