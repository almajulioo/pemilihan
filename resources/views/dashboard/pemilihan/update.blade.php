<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <form action={{route('pemilihan.update', $pemilihan->id)}} method="POST">
        @csrf
        @method('PUT')
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
    <br>
     <!-- Button Tambah Kandidat -->
    <div style="margin-bottom: 1rem;">
        <a href={{route('dashboard.kandidat.tambah', $pemilihan->id)}} style="text-decoration:none; background-color: #38a169; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;" onmouseover="this.style.backgroundColor='#2f855a'" onmouseout="this.style.backgroundColor='#38a169'">
            Tambah Kandidat
        </a>
    </div>

    <!-- Tabel Kandidat -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 2rem;">
        <thead>
            <tr>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Nomor Urut</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Photo</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Name</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Description</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Visi</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Misi 1</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Misi 2</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Misi 3</th>
                <th style="border-bottom: 1px solid #d1d5db; padding: 0.75rem; text-align: left;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kandidats as $kandidat)
            <tr>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">{{$kandidat->nomor_urut}}</td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">
                    <img src="photo_url.jpg" alt="Photo" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                </td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">{{$kandidat->name}}</td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">{{$kandidat->description}}</td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">{{$kandidat->visi}}</td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">{{$kandidat->misi_1}}</td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">{{$kandidat->misi_2}}</td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">{{$kandidat->misi_3}}</td>
                <td style="border-bottom: 1px solid #e2e8f0; padding: 0.75rem;">
                    <a href={{route('dashboard.kandidat.update', ['id' => $kandidat->id, 'pemilihan_id' => $pemilihan->id])}} style="background-color: #3182ce; text-decoration: none; color: white; padding: 0.375rem 0.75rem; border-radius: 0.375rem; border: none; cursor: pointer;" onmouseover="this.style.backgroundColor='#2b6cb0'" onmouseout="this.style.backgroundColor='#3182ce'">
                        Edit
                    </a>
                    <a onclick="return confirm('Are you sure you want to delete this item?');" href={{route('kandidat.delete', $kandidat->id)}} style="background-color: #e53e3e; text-decoration: none; color: white; padding: 0.375rem 0.75rem; border-radius: 0.375rem; border: none; cursor: pointer;" onmouseover="this.style.backgroundColor='#c53030'" onmouseout="this.style.backgroundColor='#e53e3e'">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>