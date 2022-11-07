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
                    <h3>Team UPJ</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">UPJ</a></li>
                            <li class="active"><a href="#">Team UPJ</a></li>
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
                                    <h4>Team UPJ</h4>
                                </div>
                                <div>
                                    <a href="/tambahteam" class="btn btn-primary " id="kt_account_profile_details_submit"
                                        style="margin-left: 30px;">Tambah
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
                                            <th scope="col">Foto Team</th>
                                            <th scope="col">Nama Anggota team</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Link Facebook</th>
                                            <th scope="col">Link WhatsApp</th>
                                            <th scope="col">Link Instagram</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data2 as $d2)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d2->foto_team) }}" alt=""
                                                        style="width: 50px;">
                                                </td>

                                                <td>{{  $d2->nama_team  }}</td>
                                                <td>{{  $d2->jabatan_team  }}</td>
                                                <td>{{  $d2->fb  }}</td>
                                                <td>{{  $d2->wa  }}</td>
                                                <td>{{  $d2->ig  }}</td>


                                               <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li>
                                                            <a href="/editteam/{{ $d2->id }}" data-toggle="tooltip"
                                                                data-placement="top" title="Edit">
                                                                <i class="flaticon-edit"></i>
                                                            </a>
                                                        </li>
                                                            <li>
                                                                <a href="/deleteteam/{{ $d2->id }}" data-toggle="tooltip"
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
    </body>

    {{-- @endpush --}}
@endsection
