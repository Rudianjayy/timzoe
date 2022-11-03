@extends('layout.main')
@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <title>Data Dosen - Laravel</title>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            {{--  <div>
                                <a href="/tambahidentitas" class="btn btn-primary mt-5"
                                    id="kt_account_profile_details_submit">Tambah
                                    +</a>
                            </div>  --}}
                            <table id="example" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Sekolah</th>
                                        <th scope="col">npsn</th>
                                        <th scope="col">alamat</th>
                                        <th scope="col">kecamatan</th>
                                        <th scope="col">kabupaten</th>
                                        <th scope="col">provinsi</th>
                                        <th scope="col">kodepos</th>
                                        <th scope="col">telepon</th>
                                        <th scope="col">fax</th>
                                        <th scope="col">email</th>
                                        <th scope="col">facebook</th>
                                        <th scope="col">instagram</th>
                                        <th scope="col">youtube</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $i)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $i->namasekolah }}</td>
                                            <td>{{ $i->npsn }}</td>
                                            <td>{{ $i->alamat }}</td>
                                            <td>{{ $i->kecamatan }}</td>
                                            <td>{{ $i->kabupaten }}</td>
                                            <td>{{ $i->provinsi }}</td>
                                            <td>{{ $i->kodepos }}</td>
                                            <td>{{ $i->telepon }}</td>
                                            <td>{{ $i->fax }}</td>
                                            <td>{{ $i->email }}</td>
                                            <td>{{ $i->facebook }}</td>
                                            <td>{{ $i->instagram }}</td>
                                            <td>{{ $i->youtube }}</td>
                                            <td>
                                                <a href="/editidentitas/{{ $i->id }}"
                                                    class="btn btn-warning fas fa-pen-alt">Edit</a>
                                                {{--  <a href="/deleteidentitas/{{ $i->id }}"
                                                    class="btn btn-danger fas fa-trash-alt"
                                                    onclick="return confirm('apakah anda yakin ?')">Delete</a>  --}}
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
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="{{ asset('admin/zoee/layouts/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
            </script>

            <script src="{{ asset('admin/zoee/layouts/assets/js/pages/datatables.init.js') }}"></script>

            <script src="{{ asset('admin/zoee/layouts/assets/js/app.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        scrollX: true,
                    });
                });
            </script>
            {{--  <script>
            $('.delete').click(function() {
                var zoe = $(this).attr('data-id');
                var nama = $(this).attr('data-nama');


                swal({
                        title: "Apa kamu yakin ingin menghapus data ini?",
                        text: "Kamu akan menghapus data matkul dengan nama matkul " + nama + "! ",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/deletealbum/" + zoe + ""
                            swal("Data berhasil dihapus!", {
                                icon: "success",
                            });
                        } else {
                            swal("Data tidak jadi dihapus!");
                        }
                    });
            });
        </script>  --}}
            @include('sweetalert::alert')
            {{--  <script>
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
        </script>  --}}
            @include('layout.script')
    </body>

    {{-- @endpush --}}
@endsection
