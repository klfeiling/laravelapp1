<?php

namespace App\Http\Controllers;

use App\movie;
use Illuminate\Http\Request;

class CalcCopyrightController extends Controller
{
    protected function calc(Request $request) {

        //取出请求
        //保存请求到数据库
        //查找请求并取出id
        //调用python脚本进行处理
        //删除模型
        //重定向

        $input=$request->all();

        $m = new movie;
        $m->moviename = $input['moviename'];
        $m->email = $input['email'];
        $m->save();

        //$mf = movie::where('email',$input['email'])->firstOrFail();
        //$id = $mf->id;

        //$test=array();
        //$bool="";
        //$path=base_path('public/test.py');
        //$command='python '.$path;
        //exec($command,$test,$bool);
        //dd($test);

        //$mf->forceDelete();

        return redirect('/show');
    }
}
