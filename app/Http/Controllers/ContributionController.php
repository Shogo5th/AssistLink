<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contribution;
<<<<<<< HEAD
use App\Models\searchCashDonation;
use App\Models\Good;
=======
<<<<<<< HEAD
use App\Models\searchCashDonation;
use App\Models\Good;
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
use DateTime;

class ContributionController extends Controller
{

    public function add(Request $request) {

        $contribution = new Contribution;
        $contribution->contributionID = $request->contributionID;
        $contribution->AppealOrganizationorgID = $request->orgID;
        $contribution->AppealappealID = $request->appealID;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
=======
=======
        $contribution->receviedDtate = new Datetime();

        $contribution->save();
    }
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
}
