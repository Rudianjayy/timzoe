@extends('layout.main')

@section('content')

    <head>
        @include('layout.css')
    </head>

    <body>
        <h1 style="color: black;" class="text-center mb-4">Edit Fasilitas Sekolah</h1>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/editprosesfasilitas/{{ $data->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Foto Sampul :</label>
                                    <img class="img mb-3" src="{{ asset('fotomahasiswa/' . $data->foto_sampul) }}"
                                        alt="" style="width: 70px">
                                    <input type="file" name="foto_sampul" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('foto_sampul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul Fasilitas :</label>
                                    <input type="text" name="judul_fasilitas" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->judul_fasilitas }}">
                                    @error('judul_fasiitas')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Foto :</label>
                                <img class="img mb-3" src="{{ asset('files/' . $data->foto) }}" alt=""
                                    style="width: 70px">
                                <input type="file" name="foto[]" class="my frm form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" multiple>
                                <div class="input-group-btn">
                                    {{--  <button class="btn btn-success" type="button">Tambah</button>  --}}
                                </div>
                                @error('foto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                                                <textarea name="deskripsi" id="mytextarea">{{ $data->deskripsi }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <a href="/identitas_admin" class="btn btn-danger mt-3">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

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
        //uploadimage
        $(document).ready(function() {
            $('.btn-success').click(function() {
                var htmlData = $('.clone').html();
                $('.increment').after(htmlData);
            });
            //removeimage
            $('body').on('click', 'btn-danger', function() {
                $(this).parents('.xpress').remove();
            });
        })
    </script>

    @include('layout.script')
@endsection
