<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disbursement;

class DisbursementController extends Controller
{
    public function add(Request $request) {

        $disbursement = new Disbursement;
        $disbursement->disbursementDate = $request->disbursementDate;
        $disbursement->cashAmount = $request->cashAmount;
        $disbursement->goodsDisbursed = $request->goods;
        $disbursement->ApplicantsIDno = $request->IDno;
        $disbursement->AppealsappealID = $request->appealID;
        $disbursement->AppealsOrganizationorgID = $request->orgID;

        $disbursement->save();
    }
}
