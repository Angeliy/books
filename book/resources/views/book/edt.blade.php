<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改图书</title>
</head>
<body>
    <h1>修改图书</h1>
<form action="/book/edt/{{$info->id}}" method="POST">
         {{ csrf_field() }}
        书名: <input type="text" name="name" value="{{$info->name}}">
        价格: <input type="text" name="price" value="{{$info->price}}">
        类型: <input type="text" name="type" value="{{$info->type}}">
        <input type="submit" name="btn" value="提交">
    </form>
</body>
</html>
