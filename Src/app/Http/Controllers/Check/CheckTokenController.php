<?php

namespace App\Http\Controllers\Check;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckTokenController extends Controller
{
    //
    public  function checkToken()
    {
        echo "仅为测试";
    }

    public function  reject()
    {
        echo "未满十八岁禁止上路";
    }
}