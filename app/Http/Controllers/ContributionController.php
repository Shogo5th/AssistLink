<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contribution;
use DateTime;

class ContributionController extends Controller
{

    public function add(Request $request) {

        $contribution = new Contribution;
        $contribution->contributionID = $request->contributionID;
        $contribution->AppealOrganizationorgID = $request->orgID;
        $contribution->AppealappealID = $request->appealID;
        $contribution->receviedDtate = new Datetime();

        $contribution->save();
    }
}
