<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {   
        $data = User::all()->toArray(); // fetch all organization in table
        return $data;
        
    }

    public function usernameValidation(Request $request) {

        // validation check if there is any same username in the table
        $request->validate([
            'username' => 'required|unique:users|max:25'
        ]);

        return response()->json(['success'=>'Done!']);
    }


    public function add(Request $request) {

        $user = new User;
        $user->username = $request->username;
        $user->password = substr(bin2hex(random_bytes(12)), 0, 12);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->mobileNo = $request->mobileNo;

        $user->save();
    }

    public function addUserApplicant(Request $request) {

        $user = new User;
        $user->username = $request->username;
        $user->password = substr(bin2hex(random_bytes(12)), 0, 12);
        $user->fullname = $request->fullname;

        $user->save();
    }

    public function logout() {

        session()->flush();
    }
    
}
