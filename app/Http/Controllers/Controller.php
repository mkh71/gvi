<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Response($data, $msg){
        $response = [
            'status' => true,
            'message' => $msg,
            'data' => $data
        ];
        return response()->json($response, 200);
    }

    public function Error($error, $msg = '', $code = 404){
        $response = [
            'status' => false,
            'message' => $msg,
            'error' => $error
        ];
        return response()->json($response, $code);
    }
}
