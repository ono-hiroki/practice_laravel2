<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>Hello/Index</h1>
<p>{{!!$msg!!}}</p>
<form action="/hello" method="get">
    @csrf
    <div>
        Name: <input type="text" name="name" value={{old('name')}}>
    </div>
    <div>
        Mail: <input type="text" name="mail" value={{old('mail')}}>
    </div>
    <div>
        Tel: <input type="text" name="tell" value={{old('tel')}}>
    </div>
    <input type="submit">
</form>
<hr>
<ol>
    @for($i = 0; $i < count($keys); $i++)
        <li>{{$keys[$i]}}: {{$values[$i]}}</li>
    @endfor
</ol>
</body>
</html>
