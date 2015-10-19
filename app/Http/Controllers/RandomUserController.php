<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomUserController extends Controller
{

  /** Responds to requests to GET /user */
    public function getIndex(Request $request) { 
        return view('user.index');
    }

    /** Responds to requests to POST /user */
    public function postIndex(Request $request) {
        $this->validate($request, [
            'numberUsers' => 'required|numeric'
            ]);

        //Code to package that creates fake information
        $faker = \Faker\Factory::create();

        //Grab form input fields
        $num_users = \Input::get("numberUsers");
        $email = \Input::get("wantsEmail");
        
        //Initialize Users array
        $users = Array();

        //Add users to array
        for ($i=0; $i < $num_users; $i++) {
            $users[$i] = Array("name" => $faker->userName);
            if ($email) {
                $users[$i] = array_merge($users[$i], Array("email" => $faker->email));
            };
        }
        return view('user.index')->with("users", $users);
        //return $users;
    }
}