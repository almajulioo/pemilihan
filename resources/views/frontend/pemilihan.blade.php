<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('success'))
        <h1>{{ Session::get('success') }}</h1>
    @endif

    @if(Session::has('error'))
        <h1>{{ Session::get('error') }}</h1>
    @endif

    <h2>Pemilihan {{$pemilihan->name}}</h2>
    <p>Kandidat : {{$pemilihan->kandidats->count()}}</p>
    <p>Mulai : {{$pemilihan->mulai}}</p>
    <p>Berakhir : {{$pemilihan->berakhir}}</p>

    <h2>Kandidat</h2>
    @foreach ($pemilihan->kandidats as $kandidat)
        <p>{{$kandidat->name}}</p>
        <p>{{$kandidat->description}}</p>
        <a href={{route('frontend.vote', ['pemilihan_id' => $pemilihan->id, 'kandidat_id' => $kandidat->id])}} onclick="return confirm('Apakah anda yaking ingin vote {{$kandidat->name}}?');" href="">Vote untuk {{$kandidat->name}}</a>
    @endforeach
</body>
</html>