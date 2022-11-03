@extends('layout.main')
@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <title>BSI - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
<head>
    @include('layout.css')
</head>
<body>


    <div class="breadcrumbs">

        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

        <div class="row" style="margin-top: 30px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        
                        <table class="table table-bordered dt-responsive nowrap">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto Slider1</th>
                                    <th scope="col">Foto Slider2</th>
                                    <th scope="col">Foto Slider3</th>
                                    <th scope="col">Foto Slider4</th>
                                    <th scope="col">Judul Slider</th>
                                    <th scope="col">Deskripsi Slider</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data10 as $d10)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>
                                            <img src="{{ asset('fotomahasiswa/' . $d10->foto_slider1) }}" alt=""
                                                style="width: 50px;">
                                        </td>
                                        <td>
                                            <img src="{{ asset('fotomahasiswa/' . $d10->foto_slider2) }}" alt=""
                                                style="width: 50px;">
                                        </td>
                                        <td>
                                            <img src="{{ asset('fotomahasiswa/' . $d10->foto_slider3) }}" alt=""
                                                style="width: 50px;">
                                        </td>
                                        <td>
                                            <img src="{{ asset('fotomahasiswa/' . $d10->foto_slider4) }}" alt=""
                                                style="width: 50px;">
                                        </td>
                                        <td>{{  $d10->judul_slider  }}</td>
                                        <td>{{  $d10->deskripsi_slider  }}</td>


                                        <td>
                                            <a href="/editupjslider/{{ $d10->id }}" class="btn btn-warning">Edit</a>

                                            <a href="/deleteupjslider/{{ $d10->id }}" class="btn btn-danger" onclick="return confirm('yakin gen?')">Delete</a>




                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>



        {{-- @push('scripts') --}}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="{{ asset('style/assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> --}}

        <!-- Required datatable js -->







        <script>
            $(document).ready(function () {
                $('#example').DataTable({
                    scrollX: true,
                });
            });
        </script>

        </body>
        @include('sweetalert::alert')

        @include('layout.script')
    </body>

        {{-- @endpush --}}
    @endsection