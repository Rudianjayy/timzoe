@extends('layout.main')
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
<title>Data Dosen - Laravel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')

<head>
    @include('layout.css')
</head>

<body>

    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Scrollable DataTables</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Tables</a></li>
                        <li><a href="#">DataTables</a> </li>
                        <li class="active"><a href="#">Scrollable</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="cancel-row">


            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Horizontal Scroll</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="horizontal-scroll" class="table table-striped table-bordered nowrap table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">foto</th>
                                        <th scope="col">foto_simuhi</th>
                                        <th scope="col">deskripsi_simuhi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $q)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $q->judul }}</td>
                                        <td>{!! $q->deskripsi !!}</td>
                                        <td>
                                            <img src="{{ asset('fotomahasiswa/' . $q->foto) }}" alt=""
                                                style="width: 50px;">
                                        </td>
                                        <td>
                                            <img src="{{ asset('fotomahasiswa/' . $q->foto_simuhi) }}" alt=""
                                                style="width: 50px;">
                                        </td>
                                        <td>{!! $q->deskripsi_simuhi !!}</td>
                                        {{-- <td>{{ $q->created_at->format('D M Y') }}</td> --}}
                                        <td>
                                            <a href="/editprofilsekolah/{{ $q->id }}" class="btn btn-warning fas fa-pen-alt">Edit</a>
                                           {{--  <a href="/deleteprofilsekolah/{{ $q->id }}" class="btn btn-danger fas fa-trash-alt" onclick="return confirm('yakin gen?')">Delete</a>  --}}
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

{{-- @endpush --}}
@endsection