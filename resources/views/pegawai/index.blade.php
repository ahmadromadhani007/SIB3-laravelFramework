@extends('admin.index')
@section('content')
    <!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Pegawai<span> | DataNet</span></h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no= 1;@endphp
                        @foreach ($pegawai as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->nip }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jabatan_id }}</td>
                                <td>{{ $row->divisi_id }}</td>
                                <td>{{ $row->gender }}</td>
                                <td>{{ $row->foto }}</td>
                                <td></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
@endsection
