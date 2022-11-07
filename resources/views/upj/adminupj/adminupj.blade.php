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
                    <h3>UPJ</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">UPJ</a></li>
                            <li class="active"><a href="#">UPJ TEKAJE</a></li>
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
                                    <h4>UPJ TEKAJE</h4>
                                </div>
                                <div>
                                    <a href="/tambahupj" class="btn btn-primary "
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
                                            <th scope="col">Judul 1</th>
                                            <th scope="col">Judul 2</th>
                                            <th scope="col">Judul 3</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Dibuat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>

                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $upj)
                                                <tr>
                                                    <th>{{ $no++ }}</th>

                                                    <td>{!! $upj->judul1 !!}</td>
                                                    <td>{!! $upj->judul2 !!}</td>
                                                    <td>{!! $upj->judul3 !!}</td>
                                                    <td>
                                                        <img src="{{ asset('fotomahasiswa/' . $upj->foto_upjj) }}" alt=""
                                                            style="width: 50px;">
                                                    </td>
                                                           {{--  @php
                                                            dd($upj->kategori);
                                                           @endphp  --}}
                                                    </td>
                                                    <td>{{ $upj->created_at }}</td>

                                                    <td class="align-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a href="/editupj/{{ $upj->id }}"
                                                                    data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="flaticon-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/deleteupj/{{ $upj->id }}"
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




        @include('sweetalert::alert')

        @include('layout.script')
    </body>

    {{-- @endpush --}}
@endsection
