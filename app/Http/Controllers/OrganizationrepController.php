<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizationrep;

class OrganizationrepController extends Controller
{
    public function add(Request $request) {


        $orgrep = new Organizationrep;
        $orgrep->OrganizationorgID = $request->orgID;
        $orgrep->jobTitle = $request->jobTitle;
        $orgrep->Userusername = $request->username;

        $orgrep->save();
    }
}
