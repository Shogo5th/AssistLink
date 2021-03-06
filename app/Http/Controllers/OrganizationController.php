<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Http\Controllers\Controller;


class OrganizationController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$organization = new Organization;
        $data = Organization::all()->toArray(); // fetch all organization in table
        return $data;
        
    }

    public function getLastSix() {
        
        $data = Organization::orderBy('orgID', 'DESC')->take(6)->get()->toArray();
        return $data;
    }

    public function search(Request $request) {
        
        $data = Organization::where('orgID',$request->orgID)->get()->toArray();
        return $data;
    }

    public function loginCheck()
    {   
        $request = session()->get('type','none');
        if($request == 'none') {
            return $request;
        }else if($request == 'rep') {
            $rep['orgName'] = session()->get('orgName');
            $rep['orgID'] = session()->get('orgID');
            $rep['fullname'] = session()->get('fullname');
            $rep['email'] = session()->get('email');
            $rep['applicantUsername'] = session()->get('applicantUsername','none');
            $rep['applicantIDno'] = session()->get('applicantIDno','none');
            return $rep;
        }else {
            return 'admin';
        }
    }

    public function find(Request $request)
    {   
        //$organization = new Organization;
        $data = Organization::select('OrgName')->where('orgID', '=', $request); // fetch all organization in table
        return $data;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {   

        $org = new Organization;
        $org->OrgName = $request->orgName;
        $org->address = $request->address;
        $org->orgID = substr(bin2hex(random_bytes(10)), 0, 10);
        $org->save();
        return response()->json('The post successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        // why return null?
        $organization = Organization::where('orgID',$request->orgID)->get()->toArray();
        if($organization) {
            return $organization;
        }return response()->json([
            'message' => 'Organization not found',
        ],404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
