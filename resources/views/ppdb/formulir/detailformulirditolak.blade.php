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
                                    <h4>Biodata Formulir</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="/submitdata27" method="POST" class="f1" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-group mb-4">
                                        <label for="nama_peserta">Nama Sesuai Ijazah*</label>
                                        <input type="text" name="nama_peserta" class="form-control" id="nama_peserta" value="{{ $data4->nama_peserta }}" readonly>
                                        @error('nama_peserta')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="tempat_lahir">Tempat Lahir*</label>
                                            <input type="text" name="tempat_lahir" class="form-control"
                                                id="tempat_lahir" value="{{ $data4->tempat_lahir }}" readonly>
                                            @error('tempat_lahir')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tanggal_lahir">Tanggal Lahir*</label>
                                            <input type="date" name="tanggal_lahir" class="form-control"
                                                id="tanggal_lahir" value="{{ $data4->tanggal_lahir }}" readonly>
                                            @error('tanggal_lahir')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="jeniskelamin">Jenis Kelamin*</label>
                                        <input type="text" name="jeniskelamin" class="form-control" id="jeniskelamin" value="{{ $data4->jeniskelamin }}" readonly>
                                        @error('jeniskelamin')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="agama">Agama*</label>
                                        <input type="text" name="agama" class="form-control" id="agama" value="{{ $data4->agama }}" readonly>
                                        @error('agama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="nisn">NISN*</label>
                                        <input type="number" name="nisn" class="form-control" id="nisn"value="{{ $data4->nisn }}" readonly>
                                        @error('nisn')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="nik">NIK (Nomor Induk Kependudukan)*</label>
                                            <input type="number" name="nik" class="form-control" id="nik" value="{{ $data4->nik }}" readonly>
                                            @error('nik')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nokk">NOKK*</label>
                                            <input type="number" name="nokk" class="form-control" id="nokk"value="{{ $data4->nokk }}" readonly>
                                            @error('nokk')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="foto_kk">Foto KK*</label>
                                            <img src="{{ asset('fotomahasiswa/' . $data4->foto_kk) }}" style="width: 200px;" alt="">
                                            @error('foto_kk')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nokk">Kode QR*</label>
                                            @if ($data4->status == 'diterima')
                                            <td>
                                                <div class="visible-print text-center">
                                                   <a href="" download> {!! QrCode::size(100)->generate($data4->nisn) !!}</a>
                                                    {{-- <p>Scan me to return to the original page.</p> --}}
                                                </div>
                                            </td>
                                        @else
                                            <td></td>
                                        @endif                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="agama">Status Anak*</label>
                                        <input type="text" name="status_anak" class="form-control" id="agama" value="{{ $data4->status_anak }}" readonly>
                                        @error('agama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-outline mb-4">
                                        <label for="alamat">Alamat*</label>
                                        <textarea class="form-control" name="alamat_rumah" id="alamat" rows="3" readonly>{{ $data4->alamat_rumah }}</textarea>
                                        @error('alamat_rumah')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="nama_ayah">Nama orang tua <span>Ayah* </label>
                                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="{{ $data4->nama_ayah }}" readonly>
                                            @error('nama_ayah')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama_ibu">Nama Ibu*</label>
                                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="{{ $data4->nama_ibu }}" readonly>
                                            @error('nama_ibu')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah*</label>
                                            <input type="text" name="pekerjaan_ayah" class="form-control"
                                                id="pekerjaan_ayah" value="{{ $data4->pekerjaan_ayah }}" readonly>
                                            @error('pekerjaan_ayah')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu*</label>
                                            <input type="text" name="pekerjaan_ibu" class="form-control"
                                                id="pekerjaan_ibu" value="{{ $data4->pekerjaan_ibu }}" readonly>
                                            @error('pekerjaan_ibu')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="sekolah_asal">Sekolah Asal* </label>
                                            <input type="text" name="sekolah_asal" class="form-control"
                                                id="sekolah_asal"  value="{{ $data4->sekolah_asal }}" readonly>
                                            @error('sekolah_asal')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="prestasi">Prestasi*</label>
                                            <input type="text" name="prestasi" class="form-control" id="prestasi"  value="{{ $data4->prestasi }}" readonly>
                                            @error('prestasi')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="notelpon_siswa">No WhatsApp Siswa* </label>
                                            <input type="number" name="notelpon_siswa" class="form-control"
                                                id="notelpon_siswa"  value="{{ $data4->notelpon_siswa }}" readonly>
                                            @error('notelpon_siswa')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="notelpon_orangtua">No Handphone Orang Tua*</label>
                                            <input type="number" name="notelpon_orangtua" class="form-control"
                                                id="notelpon_orangtua"  value="{{ $data4->notelpon_orangtua }}" readonly>
                                            @error('notelpon_orangtua')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="jurusan">Jurusan*</label>
                                        <input type="text" name="jurusan" class="form-control" id="agama" value="{{ $data4->jurusan }}" readonly>
                                        @error('jurusan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                   <div class="form-group mb-4">
                                        <label for="ukuran_kaos">Ukuran Kaos*</label>
                                        <input type="text" name="ukuran_kaos" class="form-control" id="ukuran_kaos" value="{{ $data4->ukuran_kaos }}" readonly>
                                        @error('ukuran_kaos')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </fieldset>
                                <a href="/adminformulir" class="btn btn-danger">Kembali</a>

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
