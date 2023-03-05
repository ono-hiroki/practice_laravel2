<?php

namespace App\Http\Controllers;


use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;
use Illuminate\Http\Request;


class HelloController extends Controller
{
    function __construct()
    {
    }

    public function index(Request $request)
    {

        $data = [
            'msg' => $request->msg,
            'data' => $request->alldata
        ];
        return view('hello.index', $data);
    }

    public function other()
    {
        $data = [
            'name' => '山田太郎',
            'mail' => 'taro@yamada',
            'tel' => '090-999-999',
        ];
        $query_str = http_build_query($data);
        $data['msg'] = $query_str;
        return redirect()->route('hello', $data);
    }
}
