<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Country;

class UserController extends Controller
{

    /**
     * Gets the user specified by the given id.
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function getUser($id) {
        $user = User::find($id);
        return view('user', ['user' => $user]);
    }

    /**
     * Gets the list of all the users.
     * 
     * @return \Illuminate\View\View
     */
    public function users() {
        $users = User::all();
        $countries = Country::all();
        return view('users', ['users' => $users, 'countries' => $countries]);
    }

    /**
     * Gets the list of all the users for editing.
     * 
     * @return \Illuminate\View\View
     */
    public function showEditUsers() {
        $users = User::all();
        $countries = Country::all();
        return view('users_edit', ['users' => $users, 'countries' => $countries]);
    }

    /**
     * 
     */
    public function editUsers(Request $request) {

    }

    /**
     * Shows the form for editing the user given by id.
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function showEditUser($id) {
        $user = User::find($id);
        $countries = Country::all();
        $ids = $user->countries()->pluck('id')->toArray();
        return view('user_edit', ['user' => $user, 'countries' => $countries, 'ids' => $ids]);
    }

    /**
     * Edits the user specified by the given id.
     *
     * @param Request $request
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function editUser(Request $request, $id) {
        $user = User::find($id);
        $user->countries()->sync($request->countries);
        $user->name = $request->name;
        $user->bio = $request->bio;
        $user->image = $this->getImage($request);
        $user->save();
        session()->flash('success', "User $user->name edited successfully!");
        return redirect()->route('user', ['id' => $id]);
    }

    /**
     * Gets the image URL and uploads it.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function getImage($request) {
        if($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images');
            return $path;
        }
        else {
            return $request->original;
        }
    }
}
