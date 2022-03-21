<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizationrep;
use App\Models\Organization;
use App\Models\Applicant;
use App\Models\User;

use Illuminate\Support\Facades\Mail;

use App\Mail\WelcomeMail;

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

}
