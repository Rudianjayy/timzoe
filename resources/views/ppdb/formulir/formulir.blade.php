@extends('layout.main')
@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')

    <head>
        @include('layout.css')
        <title>Admin - Formulir</title>
        <link rel="stylesheet" href="{{ asset('dist/css/lightbox.css') }}">

    </head>

    <body>


        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Formulir Pendaftaran yang Pending</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Formulir</a></li>
                            <li class="active"><a href="#">Formulir Pending</a></li>
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
                                    <h4>Formulir Pendaftaran yang Pending</h4>
                                </div>
                                <div style="margin-left: 32px; margin-bottom:7px;">
                                    {{-- <a href="/tambahformulir" class="btn btn-primary "
                                        id="kt_account_profile_details_submit" style="margin-left: 30px;">Tambah
                                        +</a> --}}

                                    {{-- <a href="#" class="btn btn-danger" id="hapusSemua" style="margin-left: 30px;">Hapus Pilihan</a> --}}

                                    <button id="diterima" class="btn btn-success">Setujui</button>
                                    <button id="ditolak" class="btn btn-danger">Ditolak</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <form id="form" action="{{ route('test') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" id="status" value="">
                                    <table id="ecommerce-product-list" class="table  table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col"><input type="checkbox"
                                                        id="chkCheckAll"></th>
                                                <th class="text-center" scope="col">No</th>
                                                <th class="text-center" scope="col">Nama Peserta</th>
                                                <th class="text-center" scope="col">NISN</th>
                                                <th class="text-center" scope="col">Detail Data</th>
                                                <th class="text-center" scope="col">Status</th>
                                                {{-- <th class="text-center" scope="col">Aksi</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data4 as $i)
                                                <tr id="sid{{ $i->id }}">
                                                    <td class="text-center"><input type="checkbox" name="ids[]"
                                                            class="checkBoxClass" value="{{ $i->id }}"></td>
                                                    <td class="text-center">{{ $no++ }}</td>
                                                    <td class="text-center">{{ $i->nama_peserta }}</td>
                                                    <td class="text-center">{{ $i->nisn }}</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-outline-primary"
                                                            href="/detailformuliradmin/{{ $i->id }}">Detail
                                                            Pendaftar</a>
                                                    </td>
                                                    <td class="text-center"><span
                                                            class="badge badge-pills outline-badge-warning">{{ $i->status }}</span>
                                                    </td>

                                                    {{-- @if ($i->status == 'pending')
                                                    <td class="align-center">
                                                        <ul class="table-controls">
                                                            <form action="/setuju/{{ $i->id }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="nisn"
                                                                    value="{{ $i->nisn }}">
                                                                <li>
                                                                    <button type="submit" title="Terima">
                                                                        <i class="flaticon-single-circle-tick"></i>
                                                                    </button>
                                                                </li>
                                                            </form>
                                                            <form action="/tolak/{{ $i->id }}" method="POST">
                                                                @csrf
                                                                <li>
                                                                    <button type="submit" title="Tolak">
                                                                        <i class="flaticon-circle-cross"></i>
                                                                    </button>
                                                                </li>
                                                            </form>
                                                        </ul>
                                                    </td>
                                                @endif --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </body>
    @include('layout.script')

    <script src="{{ asset('dist/js/lightbox-plus-jquery.min.js') }}"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>




    <script>
        $(function(e) {
            $("#chkCheckAll").click(function() {
                $(".checkBoxClass").prop('checked', $(this).prop('checked'));
            });
            $('#diterima').click(function() {
                var k = window.confirm('apakah anda yakin ingin menerima?')
                if(k){
                    
                    $('#status').val('diterima')
                    $('#form').submit()
                }
            })
            $('#ditolak').click(function() {
                var k = window.confirm('apakah anda yakin ingin menolak?')
                if(k){
                    
                    $('#status').val('ditolak')
                $('#form').submit()
                }
               
            })
        });
    </script>

    {{-- @endpush --}}
@endsection
