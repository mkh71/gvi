<?php

use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
Use Barryvdh\DomPDF\Facade\Pdf;

function uploadFile($path = "uploads", $file)
{
    $name = time() . '-' . mt_rand(100000, 999999).'.pdf';
    $filePath = config('app.name').'/'.myClinic('slug').'/'.$path . '/' . $name;

    //$url = 'https://s3.' . config("aws.AWS_DEFAULT_REGION") . '.amazonaws.com/' . config("aws.AWS_BUCKET") . '/' . $filePath;
    //Storage::disk('s3')->put($filePath, file_get_contents($file), 'public/');
    //return $url;

//    $rand_no = mt_rand(100000, 999999);
//    $file_name = time().$rand_no.'.pdf';
//    Storage::disk('s3')->put($file_name, $file->output(), 'public');
//    $final_url = Storage::disk('s3')->url($file_name);

    Storage::disk('public')->put($filePath, $file->output()); //local
    return $filePath; //local
}
