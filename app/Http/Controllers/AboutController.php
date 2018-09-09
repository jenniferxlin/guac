<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AboutController extends Controller
{

    /**
     * Returns the about page for the magazine.
     *
     * @return \Illuminate\View\View
     */
    public function about() {
        $users = User::all();
        return view('about', [
          'users' => $users,
        ]);
    }

}
