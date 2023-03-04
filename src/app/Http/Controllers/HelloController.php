<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    function __construct()
    {
        $this->fname = 'hello.txt';
    }

    public function index()
    {
        $sample_msg = Storage::disk('public')->url($this->fname);
        $sample_data = Storage::disk('public')->get($this->fname);
        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL, $sample_data)
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request,$msg)
    {
        Storage::disk('public')->put($this->fname, $msg);
        return redirect()->route('hello');
    }
}
