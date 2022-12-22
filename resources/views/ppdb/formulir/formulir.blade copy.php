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
                                <div>
                                    {{-- <a href="/tambahformulir" class="btn btn-primary "
                                        id="kt_account_profile_details_submit" style="margin-left: 30px;">Tambah
                                        +</a> --}}

                                        <a href="#" class="btn btn-danger" id="hapusSemua" style="margin-left: 30px;">Hapus Pilihan</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="ecommerce-product-list" class="table  table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" id="chkCheckAll"></th>
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
                                            <tr id="sid{{ $i->id }}">
                                                <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{ $i->id }}"></td>
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


    <script>
        $(function(e){
            $("#chkCheckAll").click(function(){
                $(".checkBoxClass").prop('checked',$(this).prop('checked'));
            });

            $("#hapusSemua").click(function(e){
                e.preventDefault();
                var allids = [];

                $("input:checkbox[name=ids]:checked").each(function(){
                    allids.push($(this).val());
                });


                $.ajax({
                    url:"{{ route('student.deleteSelected') }}",
                    type:"DELETE",
                    data:{
                        _token:$("input[name=_token]").val(),
                        ids:allids
                    },
                    success:function(response){
                        $.each(allids,function(key,val){
                            $("#sid"+val).remove();
                        })
                    }
                });
            })
        });
    </script>

    {{-- @endpush --}}
@endsection
