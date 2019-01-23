<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户列表</title>
</head>
<body>
    <h1>用户列表</h1>
    @foreach ($data as $item)
        id:{{ $item->id }}------name:{{ $item->name }}----price:{{$item->price}}-----type:{{$item->type}}
        <a href="/book/edt/{{$item->id}}">编辑</a>
        <a href="/book/del/{{$item->id}}">删除</a>
        <hr>
    @endforeach
</body>
</html>
