<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){

    	return view('index');
    }

    public function store(Request $request){

        $file = $request->file('file')->store('public/documents');
        $path = explode("/", $file);
        return $path[1]."/".$path[2];
    }

}
