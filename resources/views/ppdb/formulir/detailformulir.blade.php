@extends('layout.main')
@section('content')

    <head>
        @include('layout.css')
        <style>

        </style>
    </head>

    <body>
        <div class="container" mb-5>

            <div class="row">
                <div class="col-lg-12 layout-spacing" style="margin-top: 20px;">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header border-bottom border-default">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Silahkan Isi Form Di Bawah Ini Dengan Teliti</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="/submitdata27" method="POST" class="f1" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-group mb-4">
                                        <label for="nama_peserta">Nama Sesuai Ijazah*</label>
                                        <input type="text" name="nama_peserta" class="form-control" id="nama_peserta" value="{{ $fo->nama_peserta }}" readonly>
                                        @error('nama_peserta')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="tempat_lahir">Tempat Lahir*</label>
                                            <input type="text" name="tempat_lahir" class="form-control"
                                                id="tempat_lahir" value="{{ $fo->tempat_lahir }}" readonly>
                                            @error('tempat_lahir')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tanggal_lahir">Tanggal Lahir*</label>
                                            <input type="date" name="tanggal_lahir" class="form-control"
                                                id="tanggal_lahir" value="{{ $fo->tanggal_lahir }}" readonly>
                                            @error('tanggal_lahir')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="jeniskelamin">Jenis Kelamin*</label>
                                        <input type="text" name="jeniskelamin" class="form-control" id="jeniskelamin" value="{{ $fo->jeniskelamin }}" readonly>
                                        @error('jeniskelamin')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="agama">Agama*</label>
                                        <input type="text" name="agama" class="form-control" id="agama" value="{{ $fo->agama }}" readonly>
                                        @error('agama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="nisn">NISN*</label>
                                        <input type="number" name="nisn" class="form-control" id="nisn"value="{{ $fo->nisn }}" readonly>
                                        @error('nisn')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="nik">NIK (Nomor Induk Kependudukan)*</label>
                                            <input type="number" name="nik" class="form-control" id="nik" value="{{ $fo->nik }}" readonly>
                                            @error('nik')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nokk">NOKK*</label>
                                            <input type="number" name="nokk" class="form-control" id="nokk"value="{{ $fo->nokk }}" readonly>
                                            @error('nokk')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="foto_kk">Foto KK*</label>
                                            <img src="{{ asset('fotomahasiswa/' . $fo->foto_kk) }}" style="width: 200px;" alt="">
                                            @error('foto_kk')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="agama">Status Anak*</label>
                                        <input type="text" name="status_anak" class="form-control" id="agama" value="{{ $fo->status_anak }}" readonly>
                                        @error('agama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-outline mb-4">
                                        <label for="alamat">Alamat*</label>
                                        <textarea class="form-control" name="alamat_rumah" id="alamat" rows="3" readonly>{{ $fo->alamat_rumah }}</textarea>
                                        @error('alamat_rumah')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="nama_ayah">Nama orang tua <span>Ayah* </label>
                                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="{{ $fo->nama_ayah }}" readonly>
                                            @error('nama_ayah')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama_ibu">Nama Ibu*</label>
                                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="{{ $fo->nama_ibu }}" readonly>
                                            @error('nama_ibu')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah*</label>
                                            <input type="text" name="pekerjaan_ayah" class="form-control"
                                                id="pekerjaan_ayah" value="{{ $fo->pekerjaan_ayah }}" readonly>
                                            @error('pekerjaan_ayah')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu*</label>
                                            <input type="text" name="pekerjaan_ibu" class="form-control"
                                                id="pekerjaan_ibu" value="{{ $fo->pekerjaan_ibu }}" readonly>
                                            @error('pekerjaan_ibu')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="sekolah_asal">Sekolah Asal* </label>
                                            <input type="text" name="sekolah_asal" class="form-control"
                                                id="sekolah_asal"  value="{{ $fo->sekolah_asal }}" readonly>
                                            @error('sekolah_asal')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="prestasi">Prestasi*</label>
                                            <input type="text" name="prestasi" class="form-control" id="prestasi"  value="{{ $fo->prestasi }}" readonly>
                                            @error('prestasi')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="notelpon_siswa">No WhatsApp Siswa* </label>
                                            <input type="number" name="notelpon_siswa" class="form-control"
                                                id="notelpon_siswa"  value="{{ $fo->notelpon_siswa }}" readonly>
                                            @error('notelpon_siswa')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="notelpon_orangtua">No Handphone Orang Tua*</label>
                                            <input type="number" name="notelpon_orangtua" class="form-control"
                                                id="notelpon_orangtua"  value="{{ $fo->notelpon_orangtua }}" readonly>
                                            @error('notelpon_orangtua')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="jurusan">Jurusan*</label>
                                        <input type="text" name="jurusan" class="form-control" id="agama" value="{{ $fo->jurusan }}" readonly>
                                        @error('jurusan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                   <div class="form-group mb-4">
                                        <label for="ukuran_kaos">Ukuran Kaos*</label>
                                        <input type="text" name="ukuran_kaos" class="form-control" id="ukuran_kaos" value="{{ $fo->ukuran_kaos }}" readonly>
                                        @error('ukuran_kaos')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </fieldset>
                                <a href="/userformulir" class="btn btn-danger">Kembali</a>

                                <!-- step 2 -->
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('layout.script')
    </body>
@endsection
