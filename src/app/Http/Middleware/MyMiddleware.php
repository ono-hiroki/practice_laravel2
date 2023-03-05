<?php

namespace App\Http\Middleware;

use App\Facades\MyService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = rand(0, count(MyService::allData()));
        MyService::setId($id);
        $merge_data = [
            'id' => $id,
            'msg' => MyService::say(),
            'alldata' => MyService::allData(),

        ];
        $request->merge($merge_data);

        $response = $next($request);

        $content = $response->content();
        $content .= '<style>body {background-color:#eef;}
                     p {font-size:18pt;)
                     li {color:red; font-weight:bold;}</style>';
        $response->setContent($content);

        return $response;
    }
}
