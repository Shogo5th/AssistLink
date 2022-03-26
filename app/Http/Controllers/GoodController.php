<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller
{
    public function add(Request $request) {

        $good = new Good;
        $good->description = $request->description;
        $good->estimatedValue = $request->estimatedValue;
        $good->ContributioncontributionID = $request->contributionID;
        $good->ContributionAppealOrganizationorgID = $request->orgID;
        $good->ContributionAppealappealID = $request->appealID;

        $good->save();
    }
}
