<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAvatarController extends Controller
{
    /**
     * 更新用户头像.
     *
     * @param  Request  $request
     * @return  string
     */
    public function update(Request $request)
    {
        $file = $request->file('avatar');

        if($file->isValid()){

            $extension = $file->getClientOriginalExtension();

            $ID = $request->user()->id;

            $newName = $ID.".".$extension;

            $path = $file->storeAs('uploads/avatars',$newName);

            return $path;

        }
        return back();
    }

    public function show(){
        $path=storage_path().'/app/uploads/avatars/'.Auth::user()->id.'.jpg';
        //dd($path);
        return response()->file($path);
    }
}
