<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка</title>
</head>
<body>
    <h1>Добро пожаловтаь!</h1>
    @if(session('success')) 
        <p>{{session('success')}}</p>
    @endif
    <h2>Изменить заголовок главной страницы</h2> 
    <p>{{$product->name}}</p>
    <form action="" method="POST">
        {{csrf_field()}}
        <input type="text" name="name" value="{{$product->name}}">
        <input type="submit" value="Сохранить">
    </form>
</body>
</html>