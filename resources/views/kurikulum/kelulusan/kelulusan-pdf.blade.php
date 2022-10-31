<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>


    <table id="customers">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Nisn</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Hasil</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $d)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $d->nama_siswa }}</td>
                <td>{{ $d->nisn }}</td>
                <td>{{ $d->jurusan }}</td>
                <td>{{ $d->hasil }}</td>
            </tr>
            @endforeach
    </table>


</body>

</html>
