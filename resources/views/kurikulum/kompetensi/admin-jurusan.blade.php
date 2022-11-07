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
                            <a href="/tambahjurusan" class="btn btn-primary "
                                id="kt_account_profile_details_submit" style="margin-left: 30px;">Tambah
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
                                            <a href="/detailjurusan/{{ $row->id }}" class="btn btn-success">Detail</a>
                                        </td>
                                        {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}
                                        <td class="align-center">
                                            <ul class="table-controls">
                                                <li>
                                                    <a href="/editjurusan/{{ $row->id }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="flaticon-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/deletejurusan/{{ $row->id }}" data-toggle="tooltip" data-placement="top" title="Delete">
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
</body>


@endsection

