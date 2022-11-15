@extends('layout.main')

@section('content')

    <head>
        @include('layout.css')
    </head>

    <body>
        <h1 style="color: black;" class="text-center mb-4">Edit Operator</h1>

        <div class="container">


            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/submitedit26/{{ $data1->id }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama :</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data1->name }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email :</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data1->email }}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password :</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data1->password }}">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ubah Foto :</label>
                                    <img class="img mb-3" src="{{ asset('fotomahasiswa/' . $data1->foto) }}" alt=""
                                        style="width: 70px">
                                    <input type="file" name="foto" class="form-control" id="foto"
                                        aria-describedby="emailHelp" value="{{ $data1->foto }}">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ubah Foto background :</label>
                                    <img class="img mb-3" src="{{ asset('fotomahasiswa/' . $data1->foto_bg) }}"
                                        alt="" style="width: 70px">
                                    <input type="file" name="foto_bg" class="form-control" id="foto_bg"
                                        aria-describedby="emailHelp" value="{{ $data1->foto_bg }}">
                                    @error('foto_bg')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telpon :</label>
                                    <input type="text" name="notelpon" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data1->notelpon }}">
                                    @error('notelpon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat :</label>
                                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data1->alamat }}">
                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Role :</label>
                                    <input type="text" name="role" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data1->role }}">
                                    @error('role')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
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

    </body>
    <script>
        const selection = document.getElementById('matkul')
        selection.onchange = function(e) {
            const dosen = e.target.options[e.target.selectedIndex].dataset.dosen
            document.getElementById('dosen').value = dosen;
        }
    </script>
    @include('layout.script')
@endsection
