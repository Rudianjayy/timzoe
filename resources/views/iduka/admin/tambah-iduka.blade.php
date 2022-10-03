@extends('layout.main')

@section('content')
<head>
    @include('layout.css')
</head>

<body>
  <h1 class="text-center mb-4">Tambah Muhi News</h1>

  <div class="container" mb-5>

      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/idukaproses" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul :</label>
                    <textarea class="form-control form-control-solid" name="judul_iduka"></textarea>
                    @error('judul_iduka')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Deskripsi :</label>
                  <textarea class="form-control form-control-solid" name="deskripsi_iduka"></textarea>
                  @error('deskripsi_iduka')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/idukaadmin" class="btn btn-danger">Kembali</a>
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
