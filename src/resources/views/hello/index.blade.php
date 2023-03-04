<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>Hello/Index</h1>
<p>{{!!$msg!!}}</p>
<form action="/hello" method="post">
    @csrf
    <div>
        Name: <input type="text" name="name">
    </div>
    <div>
        Mail: <input type="text" name="mail">
    </div>
    <div>
        Age: <input type="text" name="age">
    </div>
    <ol>
        @for($i = 1; $i < count($keys); $i++)
            <li>
                {{$keys[$i]}}: {{$values[$i]}}
            </li>
        @endfor
    </ol>
    <input type="submit">
</form>
</body>
</html>
