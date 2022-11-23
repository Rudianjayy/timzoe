@extends('layout.main')

@section('content')

    <head>
        @include('layout.css')
        <title>Formulir Pendaftaran</title>
    </head>

    <body>
        <h1 style="color: black; margin-top:10px;" class="text-center mb-4">Formulir Pendaftaran</h1>

        <div class="container" mb-5>

            <div class="row">
                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Silahkan isi formulir pendaftaran di bawah ini!!</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="/submitdata27" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="nama_peserta">Nama Sesuai Ijazah*</label>
                                    <input type="text" name="nama_peserta" class="form-control" id="nama_peserta">
                                    @error('nama_peserta')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="tempat_lahir">Tempat Lahir*</label>
                                        <input type="text" name="tempat_lahir" class="form-control"
                                            id="tempat_lahir">
                                        @error('tempat_lahir')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tanggal_lahir">Tanggal Lahir*</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                                        @error('tanggal_lahir')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="custom-control custom-radio radio-primary">
                                    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                    <br>
                                    <input type="radio" name="jeniskelamin" id="basicRadio2" value="laki-laki">
                                    <label class="custom-control-label" for="basicRadio2">Laki-laki</label>
                                </div>
                                <div>
                                    <input type="radio" name="jeniskelamin" id="basicRadio2" value="perempuan">
                                    <label for="basicRadio2" class="custom-control-label">Perempuan</label>
                                </div> --}}


                                <div><label for="jeniskelamin" class="form-label">Jenis Kelamin*</label></div>
                                <div class="custom-control custom-radio radio-primary">
                                    <input type="radio" id="laki" name="jeniskelamin" value="laki-laki" class="custom-control-input">
                                    <label class="custom-control-label" for="laki">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio radio-primary">
                                    <input type="radio" id="perempuan" name="jeniskelamin" value="perempuan" class="custom-control-input">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                                @error('jeniskelamin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Agama*</label>
                                    <select name="agama" class="form-control">
                                        <option disabled selected>Pilih Agama :</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                        <option value="jawa">Jawa</option>
                                    </select>
                                    @error('agama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="nisn">NISN*</label>
                                    <input type="number" name="nisn" class="form-control" id="nisn">
                                    @error('nisn')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="nik">NIK (Nomor Induk Kependudukan)*</label>
                                        <input type="number" name="nik" class="form-control" id="nik">
                                        @error('nik')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nokk">NOKK*</label>
                                        <input type="number" name="nokk" class="form-control" id="nokk">
                                        @error('nokk')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="foto_kk">Foto KK*</label>
                                        <input type="file" name="foto_kk" class="form-control" id="foto_kk"
                                            aria-describedby="emailHelp">
                                        @error('foto_kk')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="foto_bukti">Foto bukti bayar*</label>
                                        <input type="file" name="foto_bukti" class="form-control" id="foto_bukti">
                                        @error('foto_bukti')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Status anak dalam keluarga*</label>
                                    <select name="status" class="form-control">
                                        <option disabled selected>Pilih :</option>
                                        <option value="anakkandung">Anak Kandung</option>
                                        <option value="anaktiri">Anak Tiri</option>
                                        <option value="anakasuh">Anak Asuh</option>
                                    </select>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="alamat">Alamat*</label>
                                    <textarea class="form-control" name="alamat_rumah" id="alamat" rows="3"></textarea>
                                    @error('alamat_rumah')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="nama_ayah">Nama orang tua <span>Ayah* </label>
                                        <input type="text" name="nama_ayah" class="form-control" id="nama_ayah">
                                        @error('nama_ayah')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama_ibu">Nama Ibu*</label>
                                        <input type="text" name="nama_ibu" class="form-control" id="nama_ibu">
                                        @error('nama_ibu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah*</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control"
                                            id="pekerjaan_ayah">
                                        @error('pekerjaan_ayah')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu*</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control"
                                            id="pekerjaan_ibu">
                                        @error('pekerjaan_ibu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="sekolah_asal">Sekolah Asal* </label>
                                        <input type="text" name="sekolah_asal" class="form-control"
                                            id="sekolah_asal">
                                        @error('sekolah_asal')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="prestasi">Prestasi*</label>
                                        <input type="text" name="prestasi" class="form-control" id="prestasi">
                                        @error('prestasi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="notelpon_siswa">No WhatsApp Siswa* </label>
                                        <input type="number" name="notelpon_siswa" class="form-control"
                                            id="notelpon_siswa">
                                        @error('notelpon_siswa')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="notelpon_orangtua">No Handphone Orang Tua*</label>
                                        <input type="number" name="notelpon_orangtua" class="form-control"
                                            id="notelpon_orangtua">
                                        @error('notelpon_orangtua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mendaftarkan diri sebagai calon
                                        pesertadidik SMK Muhammadiyah 1 Genteng-Banyuwangi dengan memilih Jurusan*</label>
                                    <select name="jurusan" class="form-control">
                                        <option disabled selected>Pilih Jurusan :</option>
                                        <option value="bdp">BISNIS DARING DAN PEMASARAN</option>
                                        <option value="akl">AKUNTANSI dan KEUANGAN LEMBAGA</option>
                                        <option value="otkp">OTOMATISASI dan TATA KELOLA PERKANTORAN</option>
                                        <option value="tkj">TEKNIK KOMPUTER dan JARINGAN</option>
                                        <option value="mm">MULTIMEDIA</option>
                                        <option value="mm">PERHOTELAN</option>
                                    </select>
                                    @error('jurusan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div><label for="checkbox">Ukuran Kaos Olahraga*</label></div>
                                <div class="custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" name="ukuran_kaos[]" value="S"
                                        class="custom-control-input" id="S">
                                    <label class="custom-control-label" for="S">S</label>
                                </div>
                                <div class="custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" name="ukuran_kaos[]" value="M"
                                        class="custom-control-input" id="M">
                                    <label class="custom-control-label" for="M">M</label>
                                </div>
                                <div class="custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" name="ukuran_kaos[]" value="L"
                                        class="custom-control-input" id="L">
                                    <label class="custom-control-label" for="L">L</label>
                                </div>
                                <div class="custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" name="ukuran_kaos[]" value="XL"
                                        class="custom-control-input" id="XL">
                                    <label class="custom-control-label" for="XL">XL</label>
                                </div>
                                <div class="custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" name="ukuran_kaos[]" value="XXL"
                                        class="custom-control-input" id="XXL">
                                    <label class="custom-control-label" for="XXL">XXL</label>
                                </div>
                                @error('ukuran_kaos')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror




                                <button type="submit" class="btn btn-button-7 mb-4 mt-3">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
            integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
        </script>
        <script src="https://cdn.tiny.cloud/1/z3vshivvjuw47heg0vg12ouq5rr8i7ckkxmmjadvrhgsynq8/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

        @include('layout.script')
    </body>
@endsection