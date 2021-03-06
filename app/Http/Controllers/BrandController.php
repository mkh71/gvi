<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::query()->orderBy('status', "desc")->get();

        return view('backend.brand.index', compact('data'));
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $input = $request->except('image');
        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('brand', $img);
            }
            $input['image'] = $url;
        }
        Brand::query()->create($input);
        return redirect()->back()->with('success', 'Brand has been stored successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Brand::query()->find($id);
        return view('backend.brand.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $info = Brand::query()->find($id);
        $input = $request->except('image');
        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('category', $img);
            }
            $input['image'] = $url;

            $image = public_path('storage/').$info->image;
            destroyImage($image);
        }
        $info->update($input);
        return redirect()->route('brands.index')->with('success', 'brand has been updated successfully');
    }


    public function destroy($id)
    {
        //
    }
}
