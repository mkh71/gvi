<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Flagship;
use App\Gallery;
use App\Message;
use App\PageImage;
use App\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $company = company();
        $data['slider'] = Slider::query()->limit(8)->get();
        $data['categories'] = Category::query()->limit(6)->get();
        $data['brands'] = Brand::query()->where('type', 'Our Brands')->get();
        $data['image'] = PageImage::query()->latest()->first();
        return view('welcome', compact('data', 'company'));
    }

    public function categories(){
        $data = Category::all();
        return view('category', compact('data'));
    }

    public function brands(){
        $data = Brand::all();
        return view('brands', compact('data'));
    }

    public function aboutUs(){
        $data = PageImage::query()->latest()->first();
        return view('about', compact('data'));
    }

    public function flagship(){
        $data = Flagship::all();
        return view('flagship', compact('data'));
    }

    public function gallery(){
        $data['ho'] = Gallery::query()->where('type', 'Head Office')->orderByDesc('created_at')->get();
        $data['nt'] = Gallery::query()->where('type', 'National Training')->orderByDesc('group_date')->get()->groupBy(['group_location', 'group_date']);
        $data['ac'] = Gallery::query()->where('type', 'Annual Conference')->orderByDesc('created_at')->get()->groupBy('year');
        $data['dp'] = Gallery::query()->where('type', 'DITF Participation')->orderByDesc('created_at')->get()->groupBy('year');
        $data['mg'] = Gallery::query()->where('type', 'Magazine')->orderByDesc('created_at')->get();

        return view('gallery', compact('data'));
    }
    public function career(){
        return view('career');
    }
    public function contact(){
        $data = PageImage::query()->latest()->first();
        return view('contact' ,compact('data'));
    }

    public function message(Request $request){
        Message::query()->create($request->all());
        return redirect()->back()->with('success', 'Message is sent to the admin.');
    }
}
