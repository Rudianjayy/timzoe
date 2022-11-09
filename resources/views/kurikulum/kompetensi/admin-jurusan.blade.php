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
                    <h3>Kompetensi Keahlian </h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Kurikulum</a></li>
                            <li class="active"><a href="#">Kompetensi Keahlian</a></li>
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
                                    <h4>Kompetensi Keahlian</h4>
                                </div>
                                <div>
                                    <a href="/tambahjurusan" class="btn btn-primary " id="kt_account_profile_details_submit"
                                        style="margin-left: 30px;">Tambah
                                        +</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">

                                <table id="ecommerce-product-list" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Deskripsi detail</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $row)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('fotojurusan/' . $row->foto) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>{{ $row->nama_kompetensi2 }}</td>
                                                <td>{!! $row->deskripsi_kompetensi2 !!}</td>
                                                <td>
                                                    <a href="/detailjurusan/{{ $row->id }}"
                                                        class="btn btn-success">Detail</a>
                                                </td>
                                                {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}
                                                <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li>
                                                            <a href="/editjurusan/{{ $row->id }}" data-toggle="tooltip"
                                                                data-placement="top" title="Edit">
                                                                <i class="flaticon-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="delete fire"
                                                                data-id="{{ $row->id }}"
                                                                data-nama="{{ $row->nama_kompetensi2 }}"
                                                                data-toggle="tooltip" data-placement="top" title="Delete">
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
        {{--  @include('sweetalert::alert')  --}}
        @include('layout.script')

    </body>
    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin Mau Hapus?",
                    text: "Kamu Akan Menghapus Data Agama dengan nama " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Data Berhasil Di hapus", {
                            icon: "success",
                        });
                        window.location = "/deletejurusan/" + id + ""
                    } else {
                        swal("Data Tidak Jadi Di hapus");
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
