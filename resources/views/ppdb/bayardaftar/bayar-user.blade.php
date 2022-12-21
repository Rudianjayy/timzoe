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
                    <h3>Biaya </h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">PPDB</a></li>
                            <li class="active"><a href="#">Biaya</a></li>
                        </ul>
                    </div>
                </div>
            </div>

           <!-- Fade in down modal -->
        <div id="fadeinModal" class="modal animated fadeInDown" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                            <div class="widget-content widget-content-area br-4 p-0">

                                <div class="customer-bal-summary">
                                    <div class="c-b-s-header mt-3 mb-3">
                                        <h5 class="text-center" >Keterangan status pembayaran</h5>
                                        @if ($status_pay == null )
                                        @else
                                        <h6 class="text-center text-danger" >Kode Transaksi Anda : {{ $status_pay -> order_id }}</h6>
                                        @endif
                                    </div>

                                    <div class="c-b-s-body">

                                        <div class="tab-content">
                                            <div class="tab-pane active" role="tabpanel" aria-labelledby="c-b-s-monthly-tab">
                                                <div class="table-responsive customer-bal-summary-scroll-monthly">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center" scope="col">Status</th>
                                                                <th class="" scope="col">Keterangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center"><span class="badge badge-pills badge-danger">Bayar</span></td>
                                                                <td class="customer-name">Anda Belum Melakukan Pembayaran</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><span class="badge badge-pills badge-warning">Proses</span></td>
                                                                <td class="customer-name">Anda Belum Menyelesaikan Proses Pembayaran</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><span class="badge badge-pills badge-secondary">Belum  Aktif</span></td>
                                                                <td class="customer-name    ">Pembayaran Belum di Buka</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><span class="badge badge-pills badge-primary">Isi Formulir</span></td>
                                                                <td class="customer-name">Form PPDB</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><span class="badge badge-pills badge-success">Selesai</span></td>
                                                                <td class="customer-name">Pembayaran Telah Selesai</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><span class="badge badge-pills badge-dark">History</span></td>
                                                                <td class="customer-name">History Pembayaran</td>
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


            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Pembayaran</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="pricing-section bg-7">
                                    <div class="pricing pricing--norbu">
                                        @foreach ($pricing as $pc)
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">{{ $pc->gelombang }}</h3>
                                                <p class="pricing__sentence">{{ $pc->penjelasan }}</p>
                                                <div class="pricing__price"><span
                                                        class="pricing__currency">Rp.{{ number_format($pc['biaya'], 2, '.', '.') }}
                                                </div>
                                                <ul class="pricing__feature-list text-center">
                                                    <li class="pricing__feature"> <i class="fas fa-check"></i>
                                                        {{ $pc->jadwal_mulai }} - {{ $pc->jadwal_ditutup }}
                                                    </li>
                                                </ul>
                                                @if ( $pc->jadwal_mulai < now() && $pc->jadwal_ditutup > now())
                                                    @if ($status_pay == null )
                                                    <button class="pricing__action mx-auto mb-4 pay-button" data-biaya_id={{ $pc->id }} data-biaya_gelombang={{ $pc->gelombang }} data-biaya={{ (int)$pc->biaya }}>Bayar Sekarang</button>
                                                    @elseif($status_pay->status == 'pending')
                                                    <button type="button" class="btn btn-warning btn-rounded mb-4 mr-2 pay-button" data-toggle="modal" data-target="#fadeinModal"
                                                    style="text-transform: uppercase;
                                                    flex: none;
                                                    /* padding: 12px 36px; */
                                                    padding: 12px 45px;
                                                    color: #ffffff;
                                                    background: #E9B02B;
                                                    border: solid 1px #fff;
                                                    border-radius: 30px;
                                                    -webkit-transition: background 0.3s;
                                                    transition: background 0.3s;">Proses</button>
                                                    @elseif($status_pay->status == 'settlement')
                                                    <button class="btn btn-success btn-rounded mb-4 mr-2 pay-button" data-toggle="modal" data-target="#fadeinModal">Selesai</button>
                                                    <a href="/tambahformulir"  class="btn btn-primary btn-rounded mb-4 mr-2 pay-button">Isi Formulir</a>
                                                    <a href="/history"  class="btn btn-dark btn-rounded mb-4 mr-2 pay-button">History</a>
                                                    @endif

                                                @else
                                                <button class="pricing__action mx-auto mb-4 pay-button" data-toggle="modal" data-target="#fadeinModal">Belum Aktif</button>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" id="submit_form" method="POST">
                    @csrf
                    <input type="hidden" name="json" id="json_callback">
                    <input type="hidden" name="biaya_ids" id="biaya_ids">
                </form>
            </div>
        </div>

        @include('layout.script')
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-SwazW8iq5q-s8p6I"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/modal/classie.js') }}"></script>
        <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/modal/modalEffects.js') }}"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.querySelectorAll('.pay-button');
            $('.pay-button').click(function() {
                // alert('aa')

                const user_name = '{{ Auth::user()->name }}'
                const user_email = '{{ Auth::user()->email }}'
                const user_notelpon = '{{ Auth::user()->notelpon }}'

                const biaya_id = $(this).attr('data-biaya_id')
                const biaya_gelombang = $(this).attr('data-biaya_gelombang')
                const biaya = $(this).attr('data-biaya')


                const data = {
                    user_name,
                    user_email,
                    user_notelpon,
                    biaya_id,
                    biaya_gelombang,
                    biaya
                }

                console.log(data)

                console.log("{{ URL::to('/api/show') }}");

                $.ajax({
                    method: 'post',
                    url: "{{ URL::to('/api/bayaruser/show') }}",
                    data: data,
                    dataType: 'JSON',
                    success: function(e) {

                        var bebas = document.getElementById('biaya_ids')
                        // console.log(e)
                        bebas.value = e.biaya

                        window.snap.pay(e.snap, {
                            onSuccess: function(result) {
                                /* You may add your own implementation here */
                                console.log(result);
                                send_response_to_form(result);
                            },
                            onPending: function(result) {
                                /* You may add your own implementation here */
                                console.log(result);
                                send_response_to_form(result);
                            },
                            onError: function(result) {
                                /* You may add your own implementation here */
                                console.log(result);
                                send_response_to_form(result);
                            },
                            onClose: function() {
                                /* You may add your own implementation here */
                                alert('You closed the popup without finishing the payment');
                            }
                        });
                    },
                    error: function(err) {
                        console.log(err)
                    }
                })

                // fetch("{{ URL::to('/api/perusahaan/project/snap') }}", {
                // method: 'POST',
                // headers: {
                //     'Content-Type': 'application/json',
                // },
                // body: JSON.stringify(data),
                // })
                // .then((response) => response.json())
                // .then((data) => {
                //     console.log('Success:', data);

                //     var bebas = document.getElementById('jobs_ids')

                //     bebas.value = data.jobs

                //     window.snap.pay(data.snap, {
                //         onSuccess: function(result){
                //         /* You may add your own implementation here */
                //         console.log(result);
                //         send_response_to_form(result);
                //         },
                //         onPending: function(result){
                //         /* You may add your own implementation here */
                //         console.log(result);
                //         send_response_to_form(result);
                //         },
                //         onError: function(result){
                //         /* You may add your own implementation here */
                //         console.log(result);
                //         send_response_to_form(result);
                //         },
                //         onClose: function(){
                //         /* You may add your own implementation here */
                //         alert('You closed the popup without finishing the payment');
                //         }
                //     })
                // })
                // .catch((error) => {
                //     console.error('Error:', error);
                // });

            })

            function send_response_to_form(result) {
                document.getElementById('json_callback').value = JSON.stringify(result);
                $('#submit_form').submit();
            }
        </script>

    </body>
@endsection
