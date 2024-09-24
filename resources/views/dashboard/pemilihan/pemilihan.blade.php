<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #022f40;
            color: #fff;
        }

        table td {
            background-color: #f9f9f9;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .edit-btn, .delete-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .edit-btn {
            background-color: #38a9cc;
            color: #fff;
        }

        .delete-btn {
            background-color: #f44336;
            color: #fff;
        }

        .edit-btn:hover {
            background-color: #0277bd;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }

        .action-header {
            margin-bottom: 15px;
            text-align: right;
        }

        .add-btn {
            padding: 8px 16px;
            background-color: #38a9cc;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .add-btn:hover {
            background-color: #0277bd;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
    <div class="dashboard-container">
        <h1>Tabel Pemilihan yang Sedang Berlangsung</h1>
        <div class="action-header">
            <a href="{{ route('dashboard.pemilihan.tambah') }}" class="add-btn">Tambah Pemilihan</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nama Pemilihan</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Berakhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemilihans as $pemilihan)
                <tr>
                    <td>{{$pemilihan->name}}</td>
                    <td>{{$pemilihan->mulai}}</td>
                    <td>{{$pemilihan->berakhir}}</td>
                    <td class="actions">
                        <a href="{{ route('dashboard.pemilihan.update', $pemilihan->id) }}" class="edit-btn">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('pemilihan.delete', $pemilihan->id) }}" class="delete-btn">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>