@extends('admin.index')
@section('content')
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Data Gaji Pegawai</h5>
                <br />
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <br />
                <a class="btn btn-primary" title="Tambah Gaji Pegawai" href=" {{ route('gaji.create') }}">
                    <i class="bi bi-save"></i>
                </a>&nbsp;
                <br /><br />
                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gaji Pokok</th>
                            <th scope="col">Tunjangan Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($gaji as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->pegawai->nip }}</td>
                                <td>{{ $row->pegawai->nama }}</td>
                                <td>{{ $row->gapok }}</td>
                                <td>{{ $row->tunjab }}</td>
                                <td width="15%">
                                    <form method="POST" id="formDelete">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-warning btn-sm" title="Ubah Gaji Pegawai"
                                            href=" {{ route('gaji.edit', $row->id) }}">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        &nbsp;
                                        <button type="submit" data-action="{{ route('gaji.destroy', $row->id) }}"
                                            class="btn btn-danger btn-sm btnDelete" title="Hapus Gaji Pegawai">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('body').on('click', '.btnDelete', function(e) {
            e.preventDefault();
            var action = $(this).data('action');
            Swal.fire({
                title: 'Yakin ingin menghapus data ini?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formDelete').attr('action', action);
                    $('#formDelete').submit();
                }
            })
        })
    </script>
@endsection
