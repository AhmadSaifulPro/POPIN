<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Siswa</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
            @if (is_array($data) || is_object($data))
            {

            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->Santri->nama }}</td>
                <td>{{ $item->jenis }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->Admin->nama }}</td>
            </tr>
            @endforeach
            }

            @endif
        </tbody>
    </table>
</body>
</html>
