<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomUserController extends Controller
{

    /** Responds to requests to POST /user */
    public function postIndex() {
        $faker = \Faker\Factory::create();

        //Grab form input fields
        $num_users = \Input::get("numberUsers");
        $email = \Input::get("wantsEmail");
        
        //Initialize Users array
        $users = Array();

        //Add users to array
        for ($i=0; $i < $num_users; $i++) {
            $users[$i] = Array("name" => $faker->userName);
            if ($email == "true") {
                $users[$i] = array_merge($users[$i], Array("email" => $faker->email));
            };
        }
        return view('user.index')->with("users", $users);
        //return $users;
    }
}