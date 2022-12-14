@extends('layout.main')

@section('content')

    <head>
        @include('layout.css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>

    <body>
        <h1 class="text-center mt-4">Tambah Data Akademi</h1>

        <div class="container" mb-5>

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/submitdata6" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Foto :</label>
                                    <input type="file" name="foto" class="form-control" id="foto"
                                        aria-describedby="emailHelp">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama jurusan :</label>
                                    <select name="personaljurusans_id" class="form-control" id="jurusan">
                                        <option value=""></option>
                                        @foreach ($personal as $pe)
                                            <option value="{{ $pe->id }}" data-="">{{ $pe->nama_jurusan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('personaljurusans_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Akademi :</label>
                                    <textarea class="form-control form-control-solid" name="judul_akademi"></textarea>
                                    @error('judul_akademi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat :</label>
                                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email :</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telpon :</label>
                                    <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('notelpon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{--  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Deskripsi :</label>
                  <textarea class="form-control form-control-solid" name="deskripsi"></textarea>
                  @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>  --}}
                                <section style="padding-top:60px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Deskripsi
                                                    </div>
                                                    <div class="card-body">
                                                        {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                        <textarea name="deskripsi_akademi" id="mytextarea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section style="padding-top:60px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Deskripsi Detail
                                                    </div>
                                                    <div class="card-body">
                                                        {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                        <textarea name="deskripsi_detail" id="mytextarea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/dataakademi" class="btn btn-danger">Kembali</a>
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

        <script>
            const selection = document.getElementById('jurusan')
            selection.onchange = function(e) {
                const mytextarea = e.target.options[e.target.selectedIndex].dataset.mytextarea
                document.getElementById('mytextarea').value = mytextarea;
            }
        </script>
        @include('layout.script')
    </body>
@endsection
