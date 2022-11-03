<table>
    <thead>
        <tr>
            <th>Nama Siswa</th>
            <th>Nisn</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->nama_siswa }}</td>
                <td>{{ $d->nisn }}</td>
                <td>{{ $d->tanggal_lahir }}</td>
                <td>{{ $d->jurusan }}</td>
                <td>{{ $d->hasil }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
