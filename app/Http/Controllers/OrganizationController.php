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
        $org->orgID = substr(bin2hex(random_bytes(15)), 0, 15);
        $org->save();
        return response()->json('The post successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organization = Organization::find($id);
        if($organizaton) {
            return response() ->json([
                'message'=>'ok',
                'data'=>$organization
            ], 200, [], JSON_UNESCAPED_UNICODE);
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
