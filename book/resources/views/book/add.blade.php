<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加图书</title>
</head>
<body>
    <h1>添加图书</h1>
    <form action="/book/add" method="POST">
         {{ csrf_field() }}
        书名: <input type="text" name="name">
        价格: <input type="text" name="price">
        类型: <input type="text" name="type">
        <input type="submit" name="btn" value="提交">
    </form>
</body>
</html>
