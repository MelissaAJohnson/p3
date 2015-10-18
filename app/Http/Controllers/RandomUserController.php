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
        $username = \Input::get("wantsUserName");
        $email = \Input::get("wantsEmail");
        
        //Initialize Users array
        $users = Array();

        //Add users to array
        for ($i=0; $i < $num_users; $i++) {
            $users[$i] = Array("name" => $faker->name);
            if ($username == "true")
                echo $username;
                $users[$i] = array_merge($users[$i], Array('username' => $faker->userName));
            if ($email == "true")
                echo $email;
                $users[$i] = array_merge($users[$i], Array("email" => $faker->email));

        }
        return view('user.index')->with("users", $users);
        //return $users;
    }
}