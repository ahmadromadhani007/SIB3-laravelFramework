@extends('admin.index')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Input Pegawai</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nip" value="{{ old('nip') }}"
                                        class="form-control @error('nip') is-invalid @enderror">
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" value="{{ old('nama') }}"
                                        class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <select class="form-select @error('jabatan_id') is-invalid @enderror" name="jabatan_id">
                                        <option selected>-- Pilih Jabatan --</option>
                                        @foreach ($ar_jabatan as $jab)
                                            @php
                                                $sel = old('jabatan_id') == $jab->id ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $jab->id }}" {{ $sel }}>{{ $jab->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('jabatan_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Divisi</label>
                                <div class="col-sm-10">
                                    <select class="form-select @error('divisi_id') is-invalid @enderror" name="divisi_id">
                                        <option selected>-- Pilih Divisi --</option>
                                        @foreach ($ar_divisi as $div)
                                            @php
                                                $sel2 = old('divisi_id') == $div->id ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $div->id }}" {{ $sel2 }}>{{ $div->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('divisi_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    @foreach ($ar_gender as $gender)
                                        @php
                                            $cek = old('gender') == $gender ? 'checked' : '';
                                        @endphp
                                        <div class="form-check">
                                            <input class="form-check-input @error('gender') is-invalid @enderror"
                                                type="radio" name="gender" value="{{ $gender }}"
                                                {{ $cek }}>
                                            <label class="form-check-label" for="gridRadios1">
                                                {{ $gender }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('gender')
                                        <div class="invalid-feedback d-inline">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tmp_lahir" value="{{ old('tmp_lahir') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_lahir" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" style="height: 100px">{{ old('alamat') }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="foto">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10 ">

                                    <a class="btn btn-info" title="Kembali" href=" {{ url('pegawai') }}">
                                        <i class="bi bi-arrow-left-square"> Kembali</i>
                                    </a>
                                    &nbsp;
                                    <button type="submit" class="btn btn-primary" title="Simpan Pegawai"><i
                                            class="bi bi-save"></i> Simpan</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
