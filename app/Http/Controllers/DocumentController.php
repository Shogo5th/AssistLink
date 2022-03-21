<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function add(Request $request) {

        $document = new Document;
        $document->documentID = substr(bin2hex(random_bytes(12)), 0, 12);
        $document->filename = $request->filename;
<<<<<<< HEAD
        $document->description = $request->description;
=======
<<<<<<< HEAD
        $document->description = $request->description;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $document->description = $request->description;
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
        $document->ApplicantsUserusername = $request->ApplicantsUserusername;
        $document->ApplicantsIDno = $request->ApplicantsIDno;

        $document->save();
    }

}

