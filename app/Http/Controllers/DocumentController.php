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
        $document->description = $request->description;
=======
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
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        $document->ApplicantsUserusername = $request->ApplicantsUserusername;
        $document->ApplicantsIDno = $request->ApplicantsIDno;

        $document->save();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        return $document->documentID;
    }

    public function savePath(Request $request) {
        
        Document::where('documentID',$request->docID)
        ->update([
            'path' => $request->path
        ]);
    }

    public function search(Request $request) {

        $document = Document::where('ApplicantsIDno',$request->IDno)
        ->get()->toArray();
        
        return $document;
    }




<<<<<<< HEAD
=======
=======
    }

>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
}

