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

            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Pricing Table - 1</h4>
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
                                                <button class="pricing__action mx-auto mb-4 pay-button" data-biaya_id={{ $pc->id }} data-biaya_gelombang={{ $pc->gelombang }} data-biaya={{ (int)$pc->biaya }}>Bayar Sekarang</button>
                                                @else
                                                <button class="pricing__action mx-auto mb-4 pay-button">Belum Aktif</button>
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
