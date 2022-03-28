<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cashdonation;

class CashdonationController extends Controller
{
    public function add(Request $request) {


        $cash = new Cashdonation;
        $cash->amount = $request->amount;
        $cash->paymentChannel = $request->paymentChannel;
        $cash->referenceNo = $request->referenceNo;
        $cash->ContributioncontributionID = $request->contributionID;
        $cash->ContributionAppealOrganizationorgID = $request->orgID;
        $cash->ContributionAppealappealID = $request->appealID;

        $cash->save();
    }

}
