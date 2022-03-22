<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appeal;
use DateTime;


class AppealController extends Controller
{
    public function index()
    {   
        $data = Appeals::all()->toArray(); // fetch all Appeals in table
        return $data;
    }

    
    public function searchAll(){

        $orgID = session()->get('orgID');
        $appeals = Appeal::where('OrganizationorgID',$orgID)
        ->get()->toArray();
       
        return $appeals;
      
    }

    public function searchCurrent(){
        
        $today = new Datetime();
        $orgID = session()->get('orgID');
        $appeals = Appeal::where('OrganizationorgID',$orgID)->whereDate('toDate', '>=', $today)
        ->get()->toArray();
       
        return $appeals;
      
    }


    public function add(Request $request) {
        $appeal = new Appeal;
        $appeal->fromDate =  $request->fromDate;
        $appeal->toDate =  $request->toDate;
        $appeal->description =  $request->description;
        $appeal->OrganizationorgID =  $request->OrganizationorgID;
        $appeal->appealID =  substr(bin2hex(random_bytes(10)), 0, 10);
        $appeal->save();
    }

    public function find(Request $request) {
        $appeal = new Appeal;
        $appeal = Appeal::find($request);
        return $appeal;
    }

    public function getCurrentAppeals() {
        $today = new Datetime();
        $data = Appeal::whereDate('toDate', '>=', $today)
        ->get()
        ->toArray(); 

        return $data;
    }

    public function getCurrentAppealsInOrganization(Request $request) {
        $today = new Datetime();
        $data = Appeal::where('OrganizationorgID',$request->orgID)->whereDate('toDate', '>=', $today)
        ->get()
        ->toArray(); 

        return $data;
    }


    public function getPastAppeals() {

        $today = new Datetime();
        $data = Appeal::whereDate('toDate', '<', $today)
        ->get()
        ->toArray(); 

        return $data;
    }
}
