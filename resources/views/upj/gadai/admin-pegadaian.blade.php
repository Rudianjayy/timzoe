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
                    <h3>Pegadaian</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">UPJ</a></li>
                            <li class="active"><a href="#">Pegadaian</a></li>
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
                                    <h4>Pegadaian</h4>
                                </div>
                                {{--  <div>
                                    <a href="/tambahupj2" class="btn btn-primary " id="kt_account_profile_details_submit"
                                        style="margin-left: 30px;">Tambah
                                        +</a>
                                </div>  --}}
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">

                                <table id="ecommerce-product-list" class="table  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Foto Pegadaian</th>
                                            <th scope="col">Dibuat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data3 as $d3)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d3->foto_gadai) }}" alt=""
                                                        style="width: 50px;">
                                                </td>

                                                <td>{!! $d3->deskripsi_gadai !!}</td>

                                                <td>{{ $d3->created_at }}</td>


                                                <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li>
                                                            <a href="/editpegadaian/{{ $d3->id }}" data-toggle="tooltip"
                                                                data-placement="top" title="Edit">
                                                                <i class="flaticon-edit"></i>
                                                            </a>
                                                        </li>
                                                            {{--  <li>
                                                                <a href="/deletepegadaian/{{ $d3->id }}" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete">
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




        @include('sweetalert::alert')

        @include('layout.script')
    </body>

    {{-- @endpush --}}
@endsection
