<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{

    public function index(Request $request)
    {
        $msg = 'plese input text:';
        if($request->isMethod('POST')){
            $msg = 'you typed: "' . $request->input('msg') . '"';
        }
        $data = [
            'msg' => $msg,
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request,$msg)
    {
        Storage::disk('public')->put($this->fname, $msg);
        return redirect()->route('hello');
    }
}
