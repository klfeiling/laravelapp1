<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Validator;
use Hash;


class authPersonalInformationController extends Controller
{
    protected function show(){
        $s1=$s2=$s3="";
        if(Auth::user()->sex == 'Mr.')$s1='selected';
        else if(Auth::user()->sex == 'Ms.')$s2='selected';
        else $s3='selected';
        return view('auth.PersonalInformation')->with(['s1'=>$s1,'s2'=>$s2,'s3'=>$s3]);
   }

    protected function save(Request $request) {
        $input=$request->all();
        DB::update('update users set name=?,sex=?,phone=? where email = ?', [$input['name'],$input['sex'],$input['phone'],$input['email']]);

        return redirect('/index');
    }

    protected function reset(Request $request) {//参考：http://blog.csdn.net/qq_32506555/article/details/52145002登录后重置密码
        $oldpassword = $request->input('oldpassword');

        $password = $request->input('password');

        $data = $request->all();

        $rules = [

            'oldpassword'=>'required|between:6,20',

            'password'=>'required|between:6,20|confirmed',

        ];

        $messages = [

            'required' => '密码不能为空',

            'between' => '密码必须是6~20位之间',

            'confirmed' => '新密码和确认密码不匹配'

        ];

        $validator = Validator::make($data, $rules, $messages);

        $user = Auth::user();

        $validator->after(function($validator) use ($oldpassword, $user) {

            if (!Hash::check($oldpassword, $user->password)) {

                $validator->errors()->add('oldpassword', '原密码错误');

            }

        });

        if ($validator->fails()) {

            return back()->withErrors($validator);  //返回一次性错误

        }

        $user->password = bcrypt($password);

        $user->save();

        Auth::logout();  //更改完这次密码后，退出这个用户

        return redirect('/index');
    }

}
