<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Melissajstudent\SimplePassword;

class RandomUserController extends Controller
{

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
        $yespassword = \Input::get("wantsPassword");
        
        //Initialize Users array
        $users = Array();

        //Add users to array
        for ($i=0; $i < $num_users; $i++) {
            $users[$i] = Array("name" => $faker->userName);
            if ($email) {
                $users[$i] = array_merge($users[$i], Array("email" => $faker->email));
            };
            //if ($yespassword) {
            //    $users[$i] = array_merge($users[$i], Array("password" => $password->password));
            //};
        }

        return view('user.index')->with("users", $users);
        //return $users;


    }
}