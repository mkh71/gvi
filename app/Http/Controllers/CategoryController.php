<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::query()->orderBy('status', "desc")->get();

        return view('backend.category.index', compact('data'));
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $input = $request->except('image');
        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('category', $img);
            }
            $input['image'] = $url;
        }
        Category::query()->create($input);
        return redirect()->back()->with('success', 'Category has been stored successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Category::query()->find($id);
        return view('backend.category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $info = Category::query()->find($id);
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
        return redirect()->route('categories.index')->with('success', 'Category has been updated successfully');
    }
}
