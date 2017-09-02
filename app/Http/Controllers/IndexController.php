<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class IndexController extends Controller
{
    public function Show()
    {
        return view('Pages.index');
    }
}
