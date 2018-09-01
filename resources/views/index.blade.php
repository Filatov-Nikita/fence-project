<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заборы</title>
</head>
<body>
    <div class="city">Вы попали на сайт в <strong>{{$city}}</strong></div>
    <br>
    <div>
        Выберите ваш город: 
        @foreach($listCities as $key => $city) 
                <div><a href="{{route('index', $key)}}">{{$city}}</a></div> 
        @endforeach
    </div>
    <br>
    <div>Контент общий для всех городов</div>
    <br>
    <h1>{{$product->name}}</h1>
</body>
</html>