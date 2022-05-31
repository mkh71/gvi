<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $company = company();
        $data['slider'] = Slider::all();
        $data['categories'] = Category::all();
        return view('welcome', compact('data', 'company'));
    }
}
