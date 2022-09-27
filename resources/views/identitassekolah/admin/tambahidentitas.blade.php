@extends('layout.main')

@section('content')
<head>
    @include('layout.css')
</head>

<body>
  <h1 class="text-center mb-4">Tambah Data Album</h1>

  <div class="container" mb-5>

      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/identitasproses" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Sekolah :</label>
                    <input type="text" name="namasekolah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('namasekolah')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">NPSN :</label>
                  <input type="text" name="npsn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('npsn')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat :</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('alamat')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kecamatan :</label>
                    <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('kecamatan')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kabupaten :</label>
                    <input type="text" name="kabupaten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('kabupaten')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Provinsi :</label>
                    <input type="text" name="provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('provinsi')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Pos :</label>
                    <input type="text" name="kodepos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('kodepos')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telepon :</label>
                    <input type="text" name="telepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('telepon')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fax :</label>
                    <input type="text" name="fax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('fax')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email :</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Facebook :</label>
                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('facebook')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Instagram :</label>
                    <input type="text" name="instagram" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('instagram')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Youtube :</label>
                    <input type="text" name="youtube" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('youtube')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/identitas_admin" class="btn btn-danger">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script>
    const selection = document.getElementById('matkul')
    selection.onchange = function(e){
      const dosen = e.target.options[e.target.selectedIndex].dataset.dosen
      document.getElementById('dosen').value = dosen;
    }
  </script>
  @include('layout.script')
</body>

@endsection
