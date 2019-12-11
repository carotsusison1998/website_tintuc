<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\New_;
use App\New_Type;
use App\New_Type_Type;
use DB;
// use App\New;
class GetController extends Controller
{
    public function GetHome($value='')
    {
    	$first = New_::skip(rand(0, 1000))->first();
        $t = New_Type_Type::where('id', 3)->first();
        $type = New_Type::where('idTheLoai', $t['id'])->get();
        $tintuc = New_::Where('idLoaiTin', rand(9, 14))->get()->take(4);

        // foreach ($tintuc as $value) {
        //     echo "<pre>";
        //     print_r(($value->toArray()));
        //     echo "</pre>";
        // }

        $abc = DB::table('tintuc')->skip(rand(1, 1000))->first();
        $cba = DB::table('tintuc')->take(2)->skip(rand(1, 1000))->get();

    	// echo "<pre>";
    	// print_r(($b));
    	// echo "</pre>";
        return view('Page.home',compact('first', 'abc', 'cba', 't', 'type', 'tintuc'));
    }

    public function GetDetail($value='')
    {
    	return view('Page.detail');
    }
}
