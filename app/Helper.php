<?php

use App\Company;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

function uploadFile($path, $file, $w = null, $h = null)
{
    $filePath = $path . '/' . time() . '-' .$file->getClientOriginalName();

    if($h != null && $w != null){
        $filePath = Image::make($file)->resize(300, 300)->save( public_path($path. '/' . $filePath) );
    }else{
        Storage::disk('public')->put($filePath, file_get_contents($file));
    }
    return $filePath;
}

function destroyImage($image)
{
    if(file_exists($image)){
        @unlink($image);
    }
    return 1;
}

function company(){
    return Company::query()->latest()->first();
}
