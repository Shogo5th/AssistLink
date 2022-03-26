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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
    public function searchCurrent(){
        
        $today = new Datetime();
        $orgID = session()->get('orgID');
        $appeals = Appeal::where('OrganizationorgID',$orgID)->whereDate('toDate', '>=', $today)
        ->get()->toArray();
       
        return $appeals;
      
    }


<<<<<<< HEAD
=======
=======
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
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
<<<<<<< HEAD
        $appeal = Appeal::where('appealID',$request->appealID)->get()->toArray();
        return $appeal;
    }

    public function findOutcome(Request $request) {
        $appeal = new Appeal;
        $appeal = Appeal::select('outcome')->where('appealID',$request->appealID)->get()->toArray();
        if(!isset($appeal)) return null;
        return $appeal;
    }

    public function updateOutcome(Request $request) {
        $appeal = new Appeal;
        $appeal = Appeal::where('appealID',$request->appealID)
        ->update([
            'outcome' => $request->outcome
        ]);
    }


=======
        $appeal = Appeal::find($request);
        return $appeal;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae

    public function getCurrentAppeals() {
        $today = new Datetime();
        $data = Appeal::whereDate('toDate', '>=', $today)
        ->get()
        ->toArray(); 

        return $data;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
    public function getCurrentAppealsInOrganization(Request $request) {
        $today = new Datetime();
        $data = Appeal::where('OrganizationorgID',$request->orgID)->whereDate('toDate', '>=', $today)
        ->get()
        ->toArray(); 

        return $data;
    }


<<<<<<< HEAD
=======
=======
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
    public function getPastAppeals() {

        $today = new Datetime();
        $data = Appeal::whereDate('toDate', '<', $today)
        ->get()
        ->toArray(); 

        return $data;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
}
