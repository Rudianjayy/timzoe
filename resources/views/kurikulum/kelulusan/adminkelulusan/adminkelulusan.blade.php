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


            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Surat Kelulusan</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Kurikulum</a></li>
                                <li class="active"><a href="#">Surat Kelulusan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row margin-bottom-120">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Surat Kelulusan </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <div>
                                        <a href="/tambahkelulusan" class="btn btn-primary sm-3 mb-3"
                                            id="kt_account_profile_details_submit">Tambah
                                            +</a>
                                        <a href="/exportpdf" class="btn btn-danger mb-3"> Export PDF</a>
                                        <a href="/exportexcel" class="btn btn-success mb-3">Export Excel</a>
                                        <a href="/exportword" class="btn btn-primary mb-3">Export Word</a>
                                    </div>
                                    <table id="ecommerce-product-list" class="table  table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Nisn</th>
                                                <th scope="col">Tanggal Lahir</th>
                                                <th scope="col">Hasil</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $d)
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <td>{{ $d->nama_siswa }}</td>
                                                    <td>{{ $d->nisn }}</td>
                                                    <td>{{ $d->tanggal_lahir }}</td>
                                                    <td>{{ $d->hasil }}</td>
                                                    <td class="align-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a href="/editkelulusan/{{ $d->id }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="flaticon-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="delete fire"
                                                                    data-id="{{ $d->id }}"
                                                                    data-nama="{{ $d->nama_siswa }}" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete">
                                                                    <i class="flaticon-delete-5"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            @include('sweetalert::alert')
        @include('layout.script')


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <title>Data Mahasiswa - Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="{{ asset('style/assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');


            swal({
                    title: "Apa kamu yakin ingin menghapus data ini?",
                    text: "Kamu akan menghapus data dengan nama " + nama + "! ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletekelulusan/" + id + ""
                        // swal("Data berhasil dihapus!", {
                        //   icon: "success",
                        // });
                    } else {
                        swal("Data tidak jadi dihapus!");
                    }
                });
        });
    </script>
    </body>

    {{-- @endpush --}}
@endsection
