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


    public function create()
    {
        //
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
                dd($input);
            }
        }

        return redirect()->back()->with('success', 'Gallery has been stored successfully');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('backend.gallery.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
