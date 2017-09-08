<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;

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

        if(file_exists(storage_path('app/uploads/avatars/'.Auth::user()->id.'.'.Auth::user()->ImgFormat))){

            Storage::delete('uploads/avatars/'.Auth::user()->id.'.'.Auth::user()->ImgFormat);

        }

        if($file == null){
            return back();
        }

        if($file->isValid()){

            $extension = $file->getClientOriginalExtension();

            $ID = $request->user()->id;

            $newName = $ID.".".$extension;

            $file->storeAs('uploads/avatars',$newName);

            DB::update('update users set ImgFormat=? where id = ?',[$extension,$request->user()->id]);

            return back();

        }

        else
            return back();

    }

    /**
     * 展示用户头像.
     *
     * @return  string
     */

    public function show(){

        $path=storage_path().'/app/uploads/avatars/'.Auth::user()->id.'.'.Auth::user()->ImgFormat;

        return response()->file($path);
    }
}
