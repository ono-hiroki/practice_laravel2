<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function GuzzleHttp\Promise\all;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $msg = 'plese input text:';
        $keys = [];
        $values = [];
        if ($request->isMethod('post')) {
            $form = $request->all();
            $result = '<html><body>';
            foreach ($form as $key => $value) {
                $result .= $key . ' : ' . $value . '<br>';
                            }
            $result .= '</body></html>';
            $response->setContent($result);
            return $response;
        }
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        return view('hello.index', $data);
    }

}
