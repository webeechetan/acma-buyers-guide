<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function alert($msg,$body,$type){
        Session::flash('alert', [
            'msg' => $msg,
            'body' => $body,
            'type' => $type
        ]);
    }
}




