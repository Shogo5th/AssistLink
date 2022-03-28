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
        $document->description = $request->description;
        $document->ApplicantsUserusername = $request->ApplicantsUserusername;
        $document->ApplicantsIDno = $request->ApplicantsIDno;

        $document->save();
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




}

