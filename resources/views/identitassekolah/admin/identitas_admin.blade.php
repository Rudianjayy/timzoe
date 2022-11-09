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
                    <h3>Identitas Sekolah</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li class="active"><a href="#">Identitas Sekolah</a></li>
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
                                    <h4>Identitas Sekolah</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="ecommerce-product-list" class="table  table-bordered">
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
                                                <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li>
                                                            <a href="/editidentitas/{{ $i->id }}"
                                                                data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="flaticon-edit"></i>
                                                            </a>
                                                        </li>
                                                        {{--  <li>
                                                                <a href="#" class="delete fire" data-id="{{ $v->id }}" data-nama="{{ $v->judulvisi }}" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="flaticon-delete-5"></i>
                                                                </a>
                                                            </li>  --}}
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

    </body>
    @include('layout.script')
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

    {{-- @endpush --}}
@endsection
