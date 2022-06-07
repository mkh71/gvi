<?php

namespace App\Http\Controllers;

use App\PageImage;
use Illuminate\Http\Request;

class PageImageController extends Controller
{

    public function index()
    {
        $data = PageImage::all();
        return view('backend.page-image.index', compact('data'));
    }
    public function edit($id)
    {
        $data = PageImage::query()->find($id);
        return view('backend.page-image.edit', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pImage = PageImage::query()->find(1);
        if ($request->hasFile('home')){
            $image = public_path('storage/').$pImage->home;
            destroyImage($image);
            foreach($request->home as $img){
                $url = uploadFile('pages/home', $img);
            }
            $input['home'] = $url;
        }
        if ($request->hasFile('contact')){
            $image = public_path('storage/').$pImage->contact;
            destroyImage($image);
            foreach($request->contact as $img){
                $url = uploadFile('pages/contact', $img);
            }
            $input['home'] = $url;
        }
        if ($request->hasFile('about')){
            $image = public_path('storage/').$pImage->about;
            destroyImage($image);
            foreach($request->contact as $img){
                $url = uploadFile('pages/about', $img);
            }
            $input['about'] = $url;
        }
        if ($request->hasFile('sales')){
            $image = public_path('storage/').$pImage->sales;
            destroyImage($image);
            foreach($request->contact as $img){
                $url = uploadFile('pages/sales', $img);
            }
            $input['sales'] = $url;
        }
        if ($request->hasFile('beauty')){
            $image = public_path('storage/').$pImage->beauty;
            destroyImage($image);
            foreach($request->contact as $img){
                $url = uploadFile('pages/beauty', $img);
            }
            $input['beauty'] = $url;

        }
        $pImage->update($input);
        return redirect()->back();
    }

}
