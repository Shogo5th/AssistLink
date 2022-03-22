<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizationrep;
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
use App\Models\Organization;
use App\Models\Applicant;
use App\Models\User;

use Illuminate\Support\Facades\Mail;

use App\Mail\WelcomeMail;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
use App\Models\User;
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
=======
use App\Models\User;
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e

class OrganizationrepController extends Controller
{
    public function add(Request $request) {


        $orgrep = new Organizationrep;
        $orgrep->OrganizationorgID = $request->orgID;
        $orgrep->jobTitle = $request->jobTitle;
        $orgrep->Userusername = $request->username;

        $orgrep->save();

        //organization name
        $orgName = Organization::select('orgName')->where('orgID',$request->orgID)->get()->toArray();
        // get use's email
        $user = User::where('username',$request->username)->get()->toArray();

        $parameter = [
            
                        'email' => $user[0]['email'],
                        'username' => $user[0]['username'],
                        'password' => $user[0]['password'],
                        'fullname' => $user[0]['fullname'],
                        'orgName' => $orgName[0]['orgName'],
                        'jobTitle' => $request->jobTitle
                        
                        
                    ];

        $this->send($parameter);

    }

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
    /*
    If wrong, return 0
    If Admin, return 1
    If Organizationrep, return 2
    If Applicant, return 3
    */
    public function login(Request $request) {
        
        $orgrep = 
        Organizationrep::rightJoin('users', 'users.username', '=', 'organizationreps.userusername')
        ->where('users.username', '=', $request->username)->where('users.password', '=', $request->password)
        ->get()->toArray();
        
        $applicant = 
        Applicant::rightJoin('users', 'users.username', '=', 'applicants.userusername')
        ->where('users.username', '=', $request->username)->where('users.password', '=', $request->password)
        ->get()->toArray();

        if(count($orgrep) == 0 & count($applicant) == 0) {
            return 0;
        }else if($orgrep[0]['jobTitle'] == null && $applicant[0]['IDno'] == null) {
          
           session()->put('type', 'admin');
           return 1;

       }else if($orgrep[0]['jobTitle'] != null){
            
            $orgName = Organization::select('orgName')->where('orgID',$orgrep[0]['OrganizationorgID'])->get()->toArray();

            session()->put('type', 'rep');
            session()->put('orgID',$orgrep[0]['OrganizationorgID']);
            session()->put('orgName',$orgName[0]['orgName']);
            session()->put('fullname',$orgrep[0]['fullname']);
            session()->put('email',$orgrep[0]['email']);

            return 2;
       }else {
           return 3;
       }
    }

    // send email
    public function send($parameter) {

        Mail::send(new WelcomeMail($parameter));
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
    public function login(Request $request) {
        // INNER JOIN

        if(($request->username == "admin") && ($request->password == "adminpassword")) {
            return "admin";
        }else {
            $account = Organizationrep::Join('users', 'organizationreps.userusername', '=', 'organizationreps.userusername')
            ->select('users.username','password','Organizationreps.OrganizationorgID')->where('username', '=', $request->username)->where('password', '=', $request->password)
            ->get();
    
            $result = count($account);
            if($result !=0) {
                return $account;
            }else {
                return 0;
            }
            
        }

    }
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
}
