<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index() {
        $records = [];
        return redirect(route('company.index'));
        //return view('backend.dashboard', compact('records'));
    }
}
