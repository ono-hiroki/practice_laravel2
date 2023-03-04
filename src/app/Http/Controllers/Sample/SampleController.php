<?php
namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'SampleController@index',
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => 'SampleController@other',
        ];
        return view('hello.index', $data);
    }
}
