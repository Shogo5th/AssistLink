<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Crypt;


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
        $user->password = Crypt::encryptString(substr(bin2hex(random_bytes(12)), 0, 12));
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->mobileNo = $request->mobileNo;

        $user->save();
    }

    public function addUserApplicant(Request $request) {

        $user = new User;
        $user->username = $request->username;
<<<<<<< HEAD
        $user->password = Crypt::encryptString(substr(bin2hex(random_bytes(12)), 0, 12));
=======
<<<<<<< HEAD
        $user->password = Crypt::encryptString(substr(bin2hex(random_bytes(12)), 0, 12));
=======
        $user->password = substr(bin2hex(random_bytes(12)), 0, 12);
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        $user->fullname = $request->fullname;

        $user->save();
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

    public function logout() {

        session()->flush();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36



        //$user->password = Crypt::encryptString("mysecretpassword");
    }
    
<<<<<<< HEAD
=======
=======
    }
    
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
}
