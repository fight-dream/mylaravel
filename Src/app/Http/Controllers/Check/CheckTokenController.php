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

    public function gitLearn()
    {
        echo "git cesi 提交的变化";
    }

    public function gitChange()
    {
        echo "git测试分支变化";
    }

    public function githe()
    {
        echo "git测试分支合并保存";
    }
}
