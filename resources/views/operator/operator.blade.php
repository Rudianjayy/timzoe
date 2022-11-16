@extends('layout.main')
@push('css')
@endpush
@section('content')

    <head>
        @include('layout.css')
    </head>

    <body>


        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Operator</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Operator</a></li>
                            <li class="active"><a href="#">Operator</a></li>
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
                                    <h4>Form Operator </h4>
                                </div>
                                <div>
                                    <a href="/tambahoperator" class="btn btn-primary "
                                        id="kt_account_profile_details_submit" style="margin-left: 30px;">Tambah
                                        +</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">

                                <table id="ecommerce-product-list" class="table  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telpon</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Foto Bg</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data1 as $d)
                                            <tr>
                                                <th>{{ $no++ }}</th>

                                                <td>{{ $d->name }}</td>
                                                <td>{{ $d->email }}</td>
                                                <td>{{ $d->password }}</td>
                                                <td>{{ $d->alamat }}</td>
                                                <td>{{ $d->notelpon }}</td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto_bg) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>{{ $d->role }}</td>

                                                <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li>
                                                            <a href="/editoperator/{{ $d->id }}"
                                                                data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="flaticon-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="delete fire"
                                                                data-id="{{ $d->id }}"
                                                                data-nama="{{ $d->judul }}" data-toggle="tooltip"
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

        @include('layout.script')


    </body>
        <script>
            $('.delete').click(function() {
                var id = $(this).attr('data-id');
                var nama = $(this).attr('data-nama');

                
                swal({
                        title: "Apa kamu yakin ingin menghapus data ini?",
                        text: "Kamu akan menghapus data dengan album  " + nama + "! ",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/deleteoperator/" + id + ""
                             swal("Data berhasil dihapus!", {
                               icon: "success",
                             });
                        } else {
                            swal("Data tidak jadi dihapus!");
                        }
                    });
            });
        </script>

        <script>
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
        </script>
@endsection
