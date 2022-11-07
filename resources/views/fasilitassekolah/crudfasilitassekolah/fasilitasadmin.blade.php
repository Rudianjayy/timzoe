@extends('layout.main')
@push('css')
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
                    <h3>Fasilitas</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li class="active"><a href="#">Fasilitas</a></li>
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
                                    <h4>Fasilitas</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="ecommerce-product-list" class="table  table-bordered">
                                    <thead>
                                        <tr>
        
                                            <th scope="col">#</th>
                                            <th scope="col">Foto Sampul</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Judul Fasilitas</th>
                                            <th scope="col">Deskripsi</th>
                                            <th class="align-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $y)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $y->foto_sampul) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $y->foto) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>{{  $y->judul_fasilitas}}</td>
                                                <td>{!! $y->deskripsi !!}</td>
        
                                                {{-- <td>{{ $y->created_at->format('D M Y') }}</td> --}}
                                                <td>
                                                    <a href="/editfasilitas/{{ $y->id }}"
                                                        class="btn btn-warning fas fa-pen-alt">Edit</a>
                                                    <a href="/deletefasilitas/{{ $y->id }}"
                                                        class="btn btn-danger fas fa-trash-alt"
                                                        onclick="return confirm('yakin mau hapus?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    @include('sweetalert::alert')
    @include('layout.script')
    </body>
@endsection




