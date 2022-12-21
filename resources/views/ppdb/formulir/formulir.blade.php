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
                                {{-- <div>
                                    <a href="/tambahformulir" class="btn btn-primary "
                                        id="kt_account_profile_details_submit" style="margin-left: 30px;">Tambah
                                        +</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="ecommerce-product-list" class="table  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Peserta</th>
                                            <th scope="col">Jenis kelamin</th>
                                            <th scope="col">Tempat Lahir</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Agama</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">NOKK</th>
                                            <th scope="col">Foto KK</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Alamat Rumah</th>
                                            <th scope="col">Nama Ayah</th>
                                            <th scope="col">Nama Ibu</th>
                                            <th scope="col">Pekerjaan Ayah</th>
                                            <th scope="col">Pekerjaan Ibu</th>
                                            <th scope="col">Sekolah Asal</th>
                                            <th scope="col">Notelpon Siswa</th>
                                            <th scope="col">Notelpon Orangtua</th>
                                            <th scope="col">Prestasi</th>
                                            <th scope="col">Ukuran Kaos</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Kode QR</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data4 as $i)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <td>{{ $i->nama_peserta }}</td>
                                                <td>{{ $i->jeniskelamin }}</td>
                                                <td>{{ $i->tempat_lahir }}</td>
                                                <td>{{ $i->tanggal_lahir }}</td>
                                                <td>{{ $i->agama }}</td>
                                                <td>{{ $i->nisn }}</td>
                                                <td>{{ $i->nik }}</td>
                                                <td>{{ $i->nokk }}</td>
                                                <td>
                                                    <a href="{{ asset('/fotomahasiswa' . $i->foto_kk) }}"
                                                        data-lightbox="whatever">
                                                        <img src="{{ asset('fotomahasiswa/' . $i->foto_kk) }}"
                                                            alt="" style="width: 80px;">
                                                    </a>
                                                </td>
                                                
                                               
                                                <td>{{ $i->status_anak }}</td>
                                                <td>{{ $i->alamat_rumah }}</td>
                                                <td>{{ $i->nama_ayah }}</td>
                                                <td>{{ $i->nama_ibu }}</td>
                                                <td>{{ $i->pekerjaan_ayah }}</td>
                                                <td>{{ $i->pekerjaan_ibu }}</td>
                                                <td>{{ $i->sekolah_asal }}</td>
                                                <td>{{ $i->notelpon_siswa }}</td>
                                                <td>{{ $i->notelpon_orangtua }}</td>
                                                <td>{{ $i->prestasi }}</td>
                                                <td>{{ $i->ukuran_kaos }}</td>
                                                <td>{{ $i->jurusan }}</td>

                                                @if ($i->status == 'diterima')
                                                    <td>
                                                        <div class="visible-print text-center">
                                                            {!! QrCode::size(100)->generate($i->nisn) !!}
                                                            {{-- <p>Scan me to return to the original page.</p> --}}
                                                        </div>
                                                    </td>
                                                @else
                                                    <td></td>
                                                @endif
                                                <td><span class="badge badge-pills outline-badge-warning">{{ $i->status }}</span></td>

                                                @if ($i->status == 'pending')
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
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Style 2</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="customer-info-detail-2" class="table style-2 table-bordered  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column"> Record Id </th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Mobile No.</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="checkbox-column"> 1 </td>
                                            <td>Jane</td>
                                            <td>Lamb</td>
                                            <td>johndoe@yahoo.com</td>
                                            <td>555-555-5555</td>
                                            <td class="align-center">
                                                <span><img src="assets/img/profile-9.jpg" class="img-thumbnail rounded-circle" alt="profile"></span>
                                            </td>
                                            <td class="align-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                            <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="flaticon-close-fill fs-20"></i></a></td>
                                        </tr>
                                       
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
    
    <script src="{{ asset('dist/js/lightbox-plus-jquery.min.js') }}"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');


            swal({
                    title: "Apa kamu yakin ingin menghapus data ini?",
                    text: "Kamu akan menghapus data dengan album  " + nama + "! ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deleteformulir/" + id + ""
                        swal("Data berhasil dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus!");
                    }
                });
        });
    </script>
    <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        // var e;
        c1 = $('#customer-info-detail-1').DataTable({
            "lengthMenu": [ 5, 10, 20, 50, 100 ],
            headerCallback:function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            },
            columnDefs:[ {
                targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                    return'<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                }
            }],
            "language": {
                "paginate": {
                "previous": "<i class='flaticon-arrow-left-1'></i>",
                "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });

        multiCheck(c1);

        c2 = $('#customer-info-detail-2').DataTable({
            "lengthMenu": [ 5, 10, 20, 50, 100 ],
            headerCallback:function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            },
            columnDefs:[ {
                targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                    return'<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                }
            }],
            "language": {
                "paginate": {
                "previous": "<i class='flaticon-arrow-left-1'></i>",
                "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });

        multiCheck(c2);

        c3 = $('#customer-info-detail-3').DataTable({
            "lengthMenu": [ 5, 10, 20, 50, 100 ],
            "language": {
                "paginate": {
                "previous": "<i class='flaticon-arrow-left-1'></i>",
                "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });

        multiCheck(c3);
    </script>
    {{-- @endpush --}}
@endsection
