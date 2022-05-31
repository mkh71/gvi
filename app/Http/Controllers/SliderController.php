<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $data = Slider::all();
        return view('backend.slider.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $input = $request->except('image');
        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('sliders', $img);
            }
            $input['image'] = $url;
            Slider::query()->create($input);
        }

        return redirect()->back()->with('success', 'Category has been stored successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Slider::query()->find($id);
        return view('backend.slider.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $info = Slider::query()->find($id);
        $input = $request->except('image');

        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('sliders', $img);
                $input['image'] = $url;
            }

            $image = public_path('storage/').$info->image;
            destroyImage($image);
        }
        $info->update($input);
        return redirect()->route('sliders.index')->with('success', 'Category has been updated successfully');
    }
}
