<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributeController extends Controller
{
    
    /**
     * Shows the contribution page.
     */
    public function contribute() {
        return view('contribute');
    }

}
