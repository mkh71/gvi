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
        if ($request->hasFile('home')){
            foreach($request->home as $img){
                $url = uploadFile('pages/home', $img);
            }
            $input['home'] = $url;
        }
        if ($request->hasFile('contact')){
            foreach($request->contact as $img){
                $url = uploadFile('pages/contact', $img);
            }
            $input['home'] = $url;
        }
        if ($request->hasFile('about')){
            foreach($request->contact as $img){
                $url = uploadFile('pages/about', $img);
            }
            $input['about'] = $url;
        }
        if ($request->hasFile('sales')){
            foreach($request->contact as $img){
                $url = uploadFile('pages/sales', $img);
            }
            $input['sales'] = $url;
        }
        if ($request->hasFile('beauty')){
            foreach($request->contact as $img){
                $url = uploadFile('pages/beauty', $img);
            }
            $input['beauty'] = $url;

        }
        PageImage::query()->create($input);

        return redirect()->back();
    }

    public function update(Request $request, $id){

        $image = public_path('storage/').$url;
        destroyImage($image);
    }

}
