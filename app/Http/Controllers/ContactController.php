<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function save(Request $request){

        $input=$request->all();

        DB::insert('insert into contacts (name,email,phone,subject,comments) values (?,?,?,?,?)', [$input['name'],$input['email'],$input['phone'],$input['subject'],$input['comments']]);

        return back();
    }
}
