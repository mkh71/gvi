<?php

namespace App\Http\Controllers;

use App\Flagship;
use Illuminate\Http\Request;

class FlagshipController extends Controller
{

    public function index()
    {
        $data = Flagship::query()->where('status', 1)->get();

        return view('backend.flagship.index', compact('data'));
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $input = $request->except('image');

        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('Flagship', $img);
            }
            $input['image'] = $url;
        }

        Flagship::query()->create($input);
        return redirect()->back()->with('success', 'Flagship has been stored successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Flagship::query()->find($id);
        return view('backend.flagship.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $info = Flagship::query()->find($id);
        $input = $request->except('image');
        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('Flagship', $img);
            }
            $input['image'] = $url;

            $image = public_path('storage/').$info->image;
            destroyImage($image);
        }
        $info->update($input);
        return redirect()->route('flagships.index')->with('success', 'Flagship has been updated successfully');
    }
}
