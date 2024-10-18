<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($kandidats as $kandidat)
        <h1>{{$kandidat->name}}</h1>
        <h2>Total vote : {{$kandidat->votes->count()}}</h2>
    @endforeach
</body>
</html>