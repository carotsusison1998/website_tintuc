<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class momoController extends Controller
{
    public function home()
    {
    	return view('homemomo');
    }

    public function posthome(Request $req)
    {
    	$arrayName = array('name' => $req->name, 'age'=>$req->age);
    	echo response()->json($arrayName);
    }
}
