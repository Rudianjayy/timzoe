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
                                <div class="widget-content-area head-section mb-4">
                                    <div class="row">
                                        <div class="col-sm-6 col-12 text-sm-left text-center">
                                            <h3 class="in-heading mt-2 mb-2">Invoice</h3>
                                        </div>
                                        <div class="col-sm-6 col-12 text-sm-right text-center">
                                            <a class="btn btn-gradient-secondary print-invoice btn-rounded mt-sm-0 mt-2 mb-2" href="invoice-print.html" target="_blank">Print Invoice</a>
                                            <a class="btn btn-gradient-danger print-invoice btn-rounded mt-sm-0 mt-2 mb-2" href="invoice-print.html" target="_blank">Download</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-content-area content-section">
                                    <div class="row invoice-top-section">
                                        <div class="col-sm-12 mb-5">
                                            <a href="index.html" class=""><img src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/logo-4.png') }}" class="img-fluid" alt="logo"></a>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <h5 class="invoice-info-title">Invoice Info</h5>
                                            <p class="invoice-serial-number">#1942784</p>
                                        </div>
                                        <div class="col-sm-6 mb-4 text-sm-right">
                                            <p class="invoice-order-status">Order Status: Pending</p>
                                            <p class="invoice-order-date">Order Date: Jan 17 2019</p>
                                        </div>
                                    </div>

                                    <div class="row mt-5 mb-5">
                                        <div class="col-md-6 col-sm-6 invoice-from">
                                            <h5 class="invoice-from-title mb-4">Bill From</h5>
                                            <div class="row">
                                                <div class="col-12 mb-4">
                                                    <p>REDQ Inc.</p>  
                                                    <p>redq@company.com</p>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <p>405 Mulberry Rd. Mc Grady,</p>
                                                    <p>NC, 28649</p>
                                                    
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <p>Fax: +0(863) 228-7064</p>
                                                    <p>Phone: +(740) 927-9284</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 invoice-to text-sm-right">
                                            <h5 class="invoice-to-title mb-3">Bill To</h5>
                                            <div class="row mb-5">
                                                <div class="col-12 mb-4">
                                                    <p>Pineapple Inc.</p>
                                                    <p>pineapple@company.com</p>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <p>86781 547th Ave. Osmond,</p>
                                                    <p>NE, 68765</p>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <p>Fax: +0(863) 228-7064</p>
                                                    <p>Phone: +(740) 927-9284</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5 mb-5">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Item Name</th>
                                                            <th class="text-right" scope="col">Cost</th>
                                                            <th class="text-right" scope="col">Qty</th>
                                                            <th class="text-right" scope="col">Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Electric Shaver</td>
                                                            <td class="text-right">20</td>
                                                            <td class="text-right">30</td>
                                                            <td class="text-right">$2800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Earphones</td>
                                                            <td class="text-right">49</td>
                                                            <td class="text-right">55</td>
                                                            <td class="text-right">$7000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Wireless Router</td>
                                                            <td class="text-right">30</td>
                                                            <td class="text-right">5</td>
                                                            <td class="text-right">$3500</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div class="invoice-total-amounts text-right">
                                                <div class="row">
                                                    <div class="col-sm-10 col-7 text-right">
                                                        <p  class="mb-3">Subtotal: </p>
                                                    </div>
                                                    <div class="col-sm-2 col-5">
                                                        <p class="mb-3">$13300</p>
                                                    </div>
                                                    <div class="col-sm-10 col-7 text-right">
                                                        <p class="mb-3">Vat: </p>
                                                    </div>
                                                    <div class="col-sm-2 col-5">
                                                        <p class="mb-3">$700</p>
                                                    </div>
                                                    <div class="col-sm-10 col-7 text-right">
                                                        <h4 class="mb-3">Grand Total: </h4>
                                                    </div>
                                                    <div class="col-sm-2 col-5">
                                                        <h4 class="mb-3">$14000</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-12 col-12">
                                                    <a class="btn btn-primary btn-rounded send-invoice mb-5 mt-4">Send Invoice</a>
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
