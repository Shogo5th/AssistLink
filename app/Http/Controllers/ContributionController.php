<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contribution;
<<<<<<< HEAD
use App\Models\searchCashDonation;
use App\Models\Good;
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
use DateTime;

class ContributionController extends Controller
{

    public function add(Request $request) {

        $contribution = new Contribution;
        $contribution->contributionID = $request->contributionID;
        $contribution->AppealOrganizationorgID = $request->orgID;
        $contribution->AppealappealID = $request->appealID;
<<<<<<< HEAD
        $contribution->receivedDate = new Datetime();

        $contribution->save();
    }
    public function searchCashDonation(Request $request){
        $cash = 
        Contribution::rightJoin('cashdonations', 'ContributioncontributionID', '=', 'contributions.contributionID')
        ->where('cashdonations.ContributionAppealappealID', '=', $request->appealID)
        ->get()->toArray();

        return $cash;
    }

    public function searchGoods(Request $request){
        $goods = 
        Contribution::rightJoin('goods', 'ContributioncontributionID', '=', 'contributions.contributionID')
        ->where('goods.ContributionAppealappealID', '=', $request->appealID)
        ->get()->toArray();

        return $goods; 
;
    }
=======
        $contribution->receviedDtate = new Datetime();

        $contribution->save();
    }
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
}
