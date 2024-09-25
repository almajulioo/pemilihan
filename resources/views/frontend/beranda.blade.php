<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pemilihan yang sedang berlangsung</h1>
    @foreach ($pemilihans as $pemilihan)
        <h2>Pemilihan {{$pemilihan->name}}</h2>
        <p>Kandidat : {{$pemilihan->kandidats->count()}}</p>
        <p>Mulai : {{$pemilihan->mulai}}</p>
        <p>Berakhir : {{$pemilihan->berakhir}}</p>
        <a href={{route('frontend.pemilihan', $pemilihan->id)}}>Ikut Voting</a>
    @endforeach
</body>
</html>