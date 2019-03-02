<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

//    public function searchRoad(Request $request)
//    {
//        request()->validate([
//            'roadname' => 'required|min:2'
//        ]);
//
//        $result = Countpoint::where('road_name', '=', $request->roadname)->first();
//
//        if($result == null){
//            Session::flash('search-status', 'Road "' . $request->roadname . '" not found. Try a different search.');
//            return back();
//        }
//
//        return redirect('/roads/' . strtoupper($request->roadname));
//    }

}
