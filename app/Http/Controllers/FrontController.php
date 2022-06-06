<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Flagship;
use App\PageImage;
use App\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $company = company();
        $data['slider'] = Slider::query()->limit(8)->get();
        $data['categories'] = Category::query()->limit(6)->get();
        $data['brands'] = Brand::query()->where('type', 'Our Brands')->limit(12)->get();
        return view('welcome', compact('data', 'company'));
    }

    public function categories(){
        $data = Category::all();
        return view('categories', compact('data'));
    }

    public function brands(){
        $data = Brand::all();
        return view('brands', compact('data'));
    }

    public function aboutUs(){
        $data = PageImage::query()->latest()->first();
        return view('about', compact('data'));
    }

    public function flasgship(){
        $data = Flagship::all();
        return view('flagship', compact('data'));
    }

    public function gallery(){
        $data = Category::all();
        return view('gallery', compact('data'));
    }
    public function career(){
        return view('career');
    }
}
