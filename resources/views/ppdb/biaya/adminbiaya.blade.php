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
                    <h3>Biaya </h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">PPDB</a></li>
                            <li class="active"><a href="#">Biaya</a></li>
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
                                    <h4>Form Biaya </h4>
                                </div>
                                <div>
                                    <a href="/tambahbiaya" class="btn btn-primary "
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
                                            <th scope="col">No</th>
                                            <th scope="col">Gelombang</th>
                                            <th scope="col">Penjelasan</th>
                                            <th scope="col">Biaya</th>
                                            <th scope="col">Tanggal Mulai</th>
                                            <th scope="col">Tanggal Ditutup</th>
                                            <th scope="col">Tanggal Pengumuman</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data3 as $d)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>{{ $d->gelombang }}</td>
                                                <td>{{ $d->penjelasan }}</td>
                                                <td>Rp.{{ number_format($d['biaya'], 2, '.', '.') }}</td>
                                                <td>{{ $d->jadwal_mulai }}</td>
                                                <td>{{ $d->jadwal_ditutup }}</td>
                                                <td>{{ $d->tanggal_pengumuman }}</td>


                                                <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li>
                                                            <a href="/editbiaya/{{ $d->id }}"
                                                                data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="flaticon-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="delete fire"
                                                                data-id="{{ $d->id }}"
                                                                data-nama="{{ $d->gelombang }}" data-toggle="tooltip"
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
                        text: "Kamu akan menghapus data dengan gelombang  " + nama + "! ",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/deletebiaya/" + id + ""
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
