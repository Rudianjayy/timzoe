@extends('layout.main')

@section('content')
<head>
  <title>Tambah Album MOU</title>
    @include('layout.css')
</head>

<body>
  <h1 style="color: black; margin-top:10px;" class="text-center mb-4">Tambah Album Mou</h1>

  <div class="container" mb-5>

      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/submitdata30" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MOU OTKP :</label>
                  <input type="file" value="foto_otkp" name="foto_otkp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  @error('foto_otkp')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MOU TJKT :</label>
                  <input type="file" value="foto_tjkt" name="foto_tjkt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  @error('foto_tjkt')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MOU AKL :</label>
                  <input type="file" value="foto_akl" name="foto_akl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  @error('foto_akl')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MOU PH :</label>
                  <input type="file" value="foto_ph" name="foto_ph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  @error('foto_ph')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MOU DKV :</label>
                  <input type="file" value="foto_dkv" name="foto_dkv" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  @error('foto_dkv')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">MOU PPLG :</label>
                  <input type="file" value="foto_pplg" name="foto_pplg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  @error('foto_pplg')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                


                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/albumiduka" class="btn btn-danger">Kembali</a>
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
