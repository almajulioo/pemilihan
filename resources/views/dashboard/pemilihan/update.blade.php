<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action={{route('pemilihan.create')}} method="POST">
        @csrf
        @if(Session::has('success'))
        <div class="py-2 px-3 mx-3 mt-2 rounded bg-green-300 w-fit">
            <h1>{{ Session::get('success') }}</h1>
        </div>
      @endif
        <div>
            <label for="name">Name:</label>
            <input type="text" value="{{$pemilihan->name}}" name="name" required>
        </div>
        <div>
            <label for="name">Mulai:</label>
            <input type="date" value="{{$pemilihan->start_date}}" name="start_date" required>
        </div>
        <div>
            <label for="name">Berakhir:</label>
            <input type="date" value="{{$pemilihan->end_date}}" name="end_date" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>