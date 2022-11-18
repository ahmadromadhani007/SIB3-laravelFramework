<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h3 align="center">Data Pegawai</h3>
    <table border="1" cellpadding="10" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Divisi</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @php $no= 1; @endphp
            @foreach ($pegawai as $row)
                <tr>
                    <th>{{ $no++ }}</th>
                    <td>{{ $row->nip }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jabatan->nama }}</td>
                    <td>{{ $row->divisi->nama }}</td>
                    <td>{{ $row->gender }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
