<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\User;
use App\Models\UserClinic;
use Aranyasen\HL7\Segments\PID;
use Illuminate\Http\Request;
use Auth;

use Aranyasen\HL7\Message; // If Message is used
use Aranyasen\HL7\Segment; // If Segment is used
use Aranyasen\HL7\Segments\MSH; // If MSH is used
// ... and so on

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index() {
        $records = [];
        return view('backend.dashboard', compact('records'));
    }
}
