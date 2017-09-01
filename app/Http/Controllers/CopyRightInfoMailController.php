<?php

namespace App\Http\Controllers;

use App\Mail\CopyrightInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CopyRightInfoMailController extends Controller
{
    /**
     * 处理邮件发送请求.
     *
     * @param  Request  $request
     * @return Response
     */
    public function SendEmail(Request $request)
    {
        Mail::to($request->user())->send(new CopyrightInfo());

        return redirect('/show');
    }
}
