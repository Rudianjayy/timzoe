@extends('layout.main')
@push('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    @section('content')
    
    <head>
        <title>Album Iduka - Admin</title>
        @include('layout.css')
    </head>

    <body>


        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Mou</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Iduka</a></li>
                            <li class="active"><a href="#">Mou</a></li>
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
                                    <h4>Mou</h4>
                                </div>
                                <div>
                                    <a href="/tambahalbumfoto" class="btn btn-primary mt-2"
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
                                            <th scope="col">MOU OTKP</th>
                                            <th scope="col">MOU TJKT</th>
                                            <th scope="col">MOU AKL</th>
                                            <th scope="col">MOU PH</th>
                                            <th scope="col">MOU DKV</th>
                                            <th scope="col">MOU PPLG</th>
                                            <th class="align-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data3 as $d)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto_otkp) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto_tjkt) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto_akl) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto_ph) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto_dkv) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('fotomahasiswa/' . $d->foto_pplg) }}" alt=""
                                                        style="width: 50px;">
                                                </td>
                                                


                                                <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li>
                                                            <a href="/editalbumiduka/{{ $d->id }}" data-toggle="tooltip"
                                                                data-placement="top" title="Edit">
                                                                <i class="flaticon-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="delete fire"
                                                                data-id="{{ $d->id }}"
                                                                data-nama="{{ $d->jurusan_mou }}" data-toggle="tooltip"
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
    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');


            swal({
                    title: "Apa kamu yakin ingin menghapus data ini?",
                    text: "Kamu akan menghapus data dengan nama " + nama + "! ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletealbumiduka/" + id + ""
                        //  swal("Data berhasil dihapus!", {
                        //    icon: "success",
                        //  });
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

    {{-- @endpush --}}
@endsection
