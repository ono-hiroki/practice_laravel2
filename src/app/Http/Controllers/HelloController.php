<?php

namespace App\Http\Controllers;


use App\MyClasses\MyServiceInterface;




class HelloController extends Controller
{
    function __construct()
    {
    }

    public function index(MyServiceInterface $myservice, int $id = -1)
    {
        $myservice->setId($id);
        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->alldata(),
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
