@extends('admin.index')
@section('content')
    <!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Divisi<span> | SimPeg</span></h5>
                <br>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}
                        </p>
                    </div>
                @endif
                <br>
                <a href="{{ route('divisi.create') }}" class="btn btn-outline-primary">Tambah</a>
                <br>
                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no= 1;@endphp
                        @foreach ($divisi as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->nama }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
@endsection
