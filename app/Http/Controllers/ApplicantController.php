<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Applicant;
use Illuminate\Support\Facades\Crypt;


class ApplicantController extends Controller
{
    public function index()
    {   
        //$organization = new Organization;
        $data = Applicant::all()->toArray(); // fetch all Applicants in table
        return $data;
        
    }

    public function add(Request $request) {

        $applicant = new Applicant;
        $applicant->IDno = $request->IDno;
        $applicant->address = $request->address;
        $applicant->householdIncome = $request->householdIncome;
        $applicant->Userusername = $request->username;
        $applicant->OrganizationsorgID = $request->orgID;


        session()->put('applicantUsername',$request->username);
        session()->put('applicantIDno',$request->IDno);

        $applicant->save();
    }


    public function search(){

        $orgID = session()->get('orgID');
        $applicants = Applicant::Join('users', 'users.username', '=', 'applicants.Userusername')
        ->where('OrganizationsorgID',$orgID)
        ->select('IDno','fullname','address')
        ->get()->toArray();
       
        return $applicants;
      
    }

    public function find(Request $request) {
        $orgID = session()->get('orgID');
        $applicants = Applicant::Join('users', 'users.username', '=', 'applicants.Userusername')
        ->where('OrganizationsorgID',$orgID)->where('IDno',$request->IDno)
        ->select('IDno','fullname','address')
        ->get()->toArray();
       
        return $applicants;
    }
    public function IDnoValidation(Request $request) {

        // validation check if there is any same IDno in the table
        $request->validate([
            'IDno' => 'required|unique:applicants'
        ]);

        return response()->json(['success'=>'Done!']);
    }

}
