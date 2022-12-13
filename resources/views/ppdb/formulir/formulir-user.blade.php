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
    <link href="{{ asset('admintemp/adminnew/riski/nopan/assets/css/ecommerce/invoice.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>


        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Formulir User</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Formulir</a></li>
                            <li class="active"><a href="#">Formulir User</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row margin-bottom-120 invoice-print">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content invoice">

                                        @php
                                            $status = App\Models\Formulir::where('id_user', Auth::user()->id)->get();
                                            $total_status = App\Models\Formulir::where('id_user', Auth::user()->id)->count();
                                          
                                            
                                        @endphp
                                <div class="widget-content-area content-section">
                                    <div class="row invoice-top-section">
                                        <div class="col-sm-12 mb-5">
                                            <a href="index.html" class=""><img src="{{ asset('landing/html/bidzend/assets/images/icon/muhi.png') }}" style="width: 80px;" class="img-fluid" alt="logo"></a>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <h5 class="invoice-info-title">Biodata Formulir</h5>
                                        </div>
                                        <div class="col-sm-6 mb-4 text-sm-right">
                                                @foreach($status as $s)
                                                    @if ($s->status == 'pending')
                                                        
                                                    <p class="invoice-order-status">Status Penerimaan: Formulir {{ $s->status }}</p>
                                                    @elseif($s->status == 'ditolak')
                                                    <p class="invoice-order-status">Status Penerimaan: Anda {{ $s->status }}</p>
                                                    @elseif($s->status == 'diterima')
                                                    <p class="invoice-order-status">Status Penerimaan: Anda {{ $s->status }}</p>

                                                    @endif
                                                @endforeach
                                                
                                        
                                                    @if ($status_pay->status == 'settlement')
                                                        
                                                    <p class="invoice-order-date">Status Pembayaran: Anda Telah Selesai Melakukan Pembayaran Pada {{ $status_pay->gelombang }}</p>
                                                    <p class="invoice-order-date">Tanggal Pembayaran: {{ $status_pay->created_at }}</p>
                                                    @endif
                 
                                            </div>
                                    </div>
                                    <div class="row mt-5 mb-5">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">NISN</th>
                                                            <th scope="col">Detail Formulir</th>
                                                            <th scope="col">Status Penerimaan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $no = 1;
                                                        $fo = App\Models\Formulir::where('id_user',Auth::user()->id)->first();
                                                    @endphp
                                                    
                                                        <tr> 
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $fo->nama_peserta }}</td>
                                                            <td>{{ $fo->nisn }}</td>
                                                            <td>{{ $fo->nik }}</td>
                                                            <td><span class="badge badge-pills outline-badge-warning">{{ $fo->status }}</span></td>
                                                        </tr>
                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
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

    {{-- @endpush --}}
@endsection
