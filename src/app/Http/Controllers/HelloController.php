<?php

namespace App\Http\Controllers;

use App\MyClasses\MyService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function GuzzleHttp\Promise\all;

class HelloController extends Controller
{
    public function index(MyService $my_service)
    {
        $data = [
            'msg' => $my_service->say(),
            'data' => $my_service->data(),
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
