<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class meController extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'これは、meからのメッセージです.',
        ];
        return view('hello.index', $data);
    }
}
