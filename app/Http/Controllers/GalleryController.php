<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index($type)
    {
        $data = Gallery::query()->where('type', $type)->get();
        if ($type == 'Head Office'){
            return view('backend.gallery.head-office', compact('data', 'type'));
        }

        if ($type == "National Training"){
            return view('backend.gallery.national', compact('data', 'type'));
        }

        if ($type == "Magazine"){
            return view('backend.gallery.magazine', compact('data', 'type'));
        }
        return view('backend.gallery.conference', compact('data', 'type'));
    }

    public function store(Request $request)
    {
        $input = $request->except('image');
        if($request->has('group_date'))
            $input['group_date'] = date('Y-m-d', strtotime($request->group_date));

        if($request->has('image')){
            foreach($request->image as $img){
                $url = uploadFile('gallery/'.$request->type, $img);
                $input['image'] = $url;
                Gallery::query()->create($input);
            }
        }

        return redirect()->back()->with('success', 'Gallery has been stored successfully');
    }

    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('backend.gallery.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Gallery::query()->find($id);

        $input = $request->except('image');
        if($request->has('group_date'))
            $input['group_date'] = date('Y-m-d', strtotime($request->group_date));

        if($request->has('image')){
            $image = public_path('storage/').$data->image;
            destroyImage($image);
            foreach($request->image as $img){
                $url = uploadFile('gallery/'.$request->type, $img);
                $input['image'] = $url;
            }
            $data->update($input);
        }
        return redirect(route('galleries.index', $data->type))->with('success', 'Gallery has been updated successfully');
    }

    public function destroy($id)
    {
        //
    }
}
