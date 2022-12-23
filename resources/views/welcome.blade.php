@extends('layout.main')

@section('content')
    @include('layout.css')

    @if (auth()->user()->role == 'admin')
        <title>Admin | SMK Muhammadiyah 1 Genteng</title>
    @endif
    @if (auth()->user()->role == 'user')
        <title>User | SMK Muhammadiyah 1 Genteng</title>
    @endif
    @if (auth()->user()->role == 'operator1')
        <title>Operator | SMK Muhammadiyah 1 Genteng</title>
    @endif

    <style>
        #chartsPpdb,
        #columnlinemixchartdiv,
        #clusteredbarchartdiv,
        #cylinderchartdiv {
            width: 100%;
            height: 500px;
            font-size: 11px;
        }

        #clusteredbarchartdiv .amcharts-chart-div a {
            color: #fff !important;
            font-size: 11px !important;
            opacity: 1 !important;
            top: 40px !important;
        }

        .table td,
        .table th {
            border-top: 1px solid #f1f3f1;
        }

        .table-controls>li>a i {
            color: #d3d3d3;
        }
    </style>

    <link rel="icon" type="image/x-icon" href="{{ asset('admintemp/adminnew/riski/nopan/assets/img/favicon.ico') }}" />

    <body>

        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Beranda</h3>
                </div>
            </div>

            @if (auth()->user()->role == 'admin')
                <div class="row layout-spacing ">

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-sales-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-double-chat"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Berita</p>
                                        <p class="widget-numeric-value count">{{ $berita }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-order-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-note-1"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Album</p>
                                        <p class="widget-numeric-value count">{{ $galery }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-0 mb-4">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-customer-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-user-11"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Prestasi</p>
                                        <p class="widget-numeric-value count">{{ $prestasi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-income-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-primary"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Mitra</p>
                                        <p class="widget-numeric-value count">{{ $mitra }}</p>
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
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area text-center icon-counter-container">
                            <div class="row mb-5" style="padding-top: 30px;">
                                <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">
                                    <i class="counter-ico flaticon-user-group-1"></i>
                                    <h1 class="ico-counter1 ico-counter mt-2">{{ $total }}</h1>
                                    <p class="ico-counter-text">Total Pendaftar</p>
                                </div>

                                <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">
                                    <i class="counter-ico flaticon-hourglass"></i>
                                    <h1 class="ico-counter4 ico-counter mt-2">{{ $formulirp }}</h1>
                                    <p class="ico-counter-text">Siswa Pending</p>
                                </div>

                                <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">

                                    <i class="counter-ico flaticon-user-11"></i>
                                    <h1 class="ico-counter2 ico-counter mt-2">{{ $formulir }}</h1>
                                    <p class="ico-counter-text">Siswa Diterima</p>
                                </div>

                                <div class="col-xl-3 col-lg-3 mb-md-0 col-md-3 mb-5 col-sm-6">
                                    <i class="counter-ico flaticon-users"></i>
                                    <h1 class="ico-counter3 ico-counter mt-2">{{ $formulird }}</h1>
                                    <p class="ico-counter-text">Siswa Ditolak</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endif


            @if (auth()->user()->role == 'admin')
                {{-- <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Grafik Siswa Daftar Pertahun</h4>
                                    </div>
                                    <form action="{{ url('filter_grafik') }}" method="GET" class="form-group">
                                        @csrf
                                        <select class="form-control-rounded form-control" id="tahun" name="year">
                                            <?php
                                            $year = date('Y');
                                            $min = $year - 1;
                                            $max = $year;
                                            for ($i = $max; $i >= $min; $i--) {
                                                echo '<option value=' . $i . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <div id="chartsPpdb"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Grafik Siswa Daftar Pertahun penting</h4>

                                    </div>

                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <div id="grafik"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


            @if (auth()->user()->role == 'user')
                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Alur Pendaftaran</h4>
                                        <p style="margin-left:15px;">Periksa alur pendaftaran kalian melalui langkah berikut
                                            ini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row layout-spacing ">
                                    @php
                                        $langkah = App\Models\Langkahpendaftaran::all();
                                    @endphp

                                    @foreach ($langkah as $l)
                                        <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                                            <div class="widget-content-area  data-widgets br-4">
                                                <div class="widget  t-sales-widget">
                                                    <div class="media">

                                                        <div class="media-body text-right">
                                                            <p class="widget-text mb-0">{{ $l->judul_langkah }}</p>
                                                            <br>
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <p class="widget-total-stats mt-2">{{ $l->deskripsi_langkah }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Pilih Gelombang</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="zero-config" class="table table-striped table-hover table-bordered"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gelombang</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Ditutup</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data3 as $d)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $d->gelombang }}</td>
                                                    <td>{{ $d->jadwal_mulai }}</td>
                                                    <td>{{ $d->jadwal_ditutup }}</td>
                                                    @if ($d->jadwal_mulai < now() && $d->jadwal_ditutup > now())
                                                        <td class="text-center"> <a href="/bayaruser"
                                                                onclick="return confirm('Apakah Anda Yakin Memilih Gelombang Ini?')"
                                                                class="btn btn-outline-primary delete fire">Pilih</a> </td>
                                                    @else
                                                        <td class="text-center"><span class="badge badge-pills badge-danger">
                                                                {{ $d->gelombang }} ditutup</span></td>
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
                <div class="col-xl-4 col-lg-4 col-md-4 col-12 layout-spacing">
                    <div class="widget-content-area p-0 card-widget-content ">
                        <div id="user-profile-card-1" class="card br-4" style="">
                            <div class="card-body p-0">
                                <div class="usr-img-meta mx-auto">
                                    <img alt="admin-profile" src="{{ asset('admintemp/adminnew/riski/nopan/assets/img/profile-card-1.jpg') }}" class="rounded-circle">
                                </div>
                                <div class="usr-info-meta text-center">
                                    <p class="usr-name mb-0">Sean Freeman</p>
                                    <p class="usr-occupation">Designer</p>
                                    <button class="btn btn-secondary btn-rounded">View Profile</button>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12 text-center mt-4">
                                        <button class="btn btn-light-info rounded-circle mb-2 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-success rounded-circle mb-2 mr-2"><i class="flaticon-behance-logo flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-primary rounded-circle mb-2 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-warning rounded-circle mb-2 mr-2"><i class="flaticon-dribbble-bold flaticon-circle-p"></i>
                                        </button>
                                        <button class="btn btn-light-danger rounded-circle mb-2 mr-2"><i class="flaticon-youtube-logo flaticon-circle-p"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



             <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area page-views p-0  br-4">
                        <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Daily</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Weekly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Monthly</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="daily">
                                            <p class="d-count mb-0">5,067</p>
                                            <p>Total Page Views</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div id="daily"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="weekly">
                                            <p class="w-count mb-0">25,067</p>
                                            <p>Total Page Views</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div id="weekly"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="month">
                                            <p class="m-count mb-0">276,097</p>
                                            <p>Total Page Views</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div id="month"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="row">

                        <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                            <div class="widget-content-area social-likes text-center p-0  br-4">
                                <div class="card facebook">
                                    <div class="icon mb-4">
                                        <i class="flaticon-facebook-logo"></i>
                                    </div>
                                    <div class="card-content">
                                        <h5>Facebook</h5>
                                        <p>13K Followers</p>
                                    </div>
                                    <div class="card-btn-section">
                                        <p>View Profile</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Pamflet PPDB</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-sm-12 mb-5">

                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <?php $i = 0; ?>
                                                @foreach ($pamflet as $p)
                                                    <li data-target="#carouselExampleIndicators"
                                                        data-slide-to="{{ $i++ }}" class="active m"></li>
                                                @endforeach
                                            </ol>

                                            <div class="carousel-inner">
                                                @foreach ($pamflet as $key => $pamflet)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        <a href="{{ asset('fotomahasiswa/' . $p->foto_pamflet) }}"
                                                            itemprop="contentUrl" data-size="100x100">
                                                            <img class="d-block w-100"
                                                                src="{{ asset('fotomahasiswa/' . $p->foto_pamflet) }}"
                                                                itemprop="thumbnail" alt="Image description"></a>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $status_pay = App\Models\Payment::where('id_user', Auth::user()->id)->first();

                    @endphp
                    <div class="col-lg-6 col-md-6 layout-spacing">
                        @if ($status_pay == null)
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <blockquote class="blockquote">
                                        <h5>Status Pembayaran</h5>
                                        <span class="badge badge-pills badge-danger">Anda Belum Melakukan Pembayaran</span>
                                        </blockquote>
                                </div>
                            </div>
                        @elseif($status_pay->status == 'settlement')
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <blockquote class="blockquote">
                                        <h5>Status Pembayaran</h5>
                                        <span class="badge badge-pills badge-success">Anda Sudah Melakukan Pembayaran</span>
                                    </blockquote>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <blockquote class="blockquote">
                                    @php
                                        $status_formulir = App\Models\Formulir::where('id_user', Auth::user()->id)->first();
                                    @endphp

                                    <h5>Status Penerimaan</h5>

                                    @if ($status_formulir == null)
                                        <span class="badge badge-pills badge-primary">Belum Mengisi Formulir</span>
                                    @elseif ($status_formulir->biayass->tanggal_pengumuman < now() )
                                        @if ($status_formulir == null)
                                            <span class="badge badge-pills badge-primary">Belum Mengisi Formulir</span>
                                        @elseif ($status_formulir->status == null)
                                            <span class="badge badge-pills badge-primary">Belum Mengisi Formulir</span>
                                        @elseif ($status_formulir->status == 'pending')
                                            <span class="badge badge-pills badge-warning"> Formulir anda Sedang
                                                {{ $status_formulir->status }}</span>
                                        @elseif ($status_formulir->status == 'diterima')
                                            <span class="badge badge-pills badge-success">Selamat formulir anda telah
                                                {{ $status_formulir->status }}</span>
                                        @elseif ($status_formulir->status == 'ditolak')
                                            <span class="badge badge-pills badge-danger">Maaf formulir anda telah
                                                {{ $status_formulir->status }}</span>
                                        @endif
                                    @endif





                                </blockquote>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <blockquote class="blockquote">
                                    <h5>Tanggal Pengumuman</h5>
                                    @if ($status_formulir == null)
                                    <span class="badge badge-pills badge-primary">tanggal belum muncul</span>
                                    @else
                                    <span class="badge badge-pills badge-primary">{{ $status_formulir->biayass->tanggal_pengumuman }}</span>
                                    @endif
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        </div>










        @include('layout.script')
        {{--  @include('sweetalert::alert')  --}}
        <script>
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
        </script>
        <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/lightbox/photoswipe.min.js') }}"></script>
        <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/lightbox/photoswipe-ui-default.min.js') }}"></script>
        <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/lightbox/custom-photswipe.js') }}"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="{{ asset('admintemp/adminnew/riski/nopan/assets/js/custom.js') }}"></script>
        <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/table/datatable/datatables.js') }}"></script>
        <script>
            $('#zero-config').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='flaticon-arrow-left-1'></i>",
                        "next": "<i class='flaticon-arrow-right'></i>"
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });
        </script>

        <script src="https://code.highcharts.com/highcharts.js"></script>


        <script src="{{ asset('admintemp/adminnew/riski/nopan/plugins/charts/chartist/chartist.js') }}"></script>










        <script>
            Highcharts.chart('grafik', {
                title: {
                    text: 'Grafik bulanan'
                },
                xAxis: {
                    categories: {!! $bulan !!}
                },
                yAxis: {
                    titlw: {
                        text: 'Total pendaftar'
                    }
                },
                plotOptions: {
                    series: {
                        allowPoinSelect: true
                    }
                },
                series: [{
                    name: 'Jumlah Pendaftar',
                    data: {!! $status !!}
                }]


            });
        </script>

        <script>
            AmCharts.makeChart("chartsPpdb", {
                "type": "serial",
                "theme": "light",
                "dataProvider": [{

                    "year": {!! $bulan !!},
                    "visits": {!! $status !!},
                }],
                "valueAxes": [{
                    "gridColor": "#FFFFFF",
                    "gridAlpha": 0.2,
                    "dashLength": 0
                }],
                "gridAboveGraphs": true,
                "startDuration": 1,
                "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                    "fillAlphas": 0.7,
                    "lineAlpha": 0.2,
                    "type": "column",
                    "valueField": "visits",
                    "fillColors": "#5247bd",
                    "lineColor": "#5247bd"
                }],
                "chartCursor": {
                    "categoryBalloonEnabled": false,
                    "cursorAlpha": 0,
                    "zoomable": false
                },
                "categoryField": "year",
                "categoryAxis": {
                    "gridPosition": "start",
                    "gridAlpha": 0,
                    "tickPosition": "start",
                    "tickLength": 20
                },
                "export": {
                    "enabled": true
                }
            });
        </script>



        {{-- <script>
            var chartBasic = echarts.init(document.getElementById('basic_chart'));

            option = {
                tooltip: {
                    trigger: 'axis'
                },
                color: ["#6156ce", "#ee3d50"],
                legend: {
                    data: ['Evaporation', 'Precipitation']
                },
                calculable: true,
                xAxis: [{
                    type: 'category',
                    data: ['Jan']
                }],
                yAxis: [{
                    type: 'value'
                }],
                series: [{
                        name: 'Evaporation',
                        type: 'bar',
                        data: [2.0],
                        markPoint: {
                            data: [{
                                    type: 'max',
                                    name: 'The maximum value'
                                },
                                {
                                    type: 'min',
                                    name: 'Minimum value'
                                }
                            ]
                        },
                        markLine: {
                            data: [{
                                type: 'average',
                                name: 'average value'
                            }]
                        }
                    },
                    {
                        name: 'Precipitation',
                        type: 'bar',
                        data: [2.6],
                        markPoint: {
                            data: [{
                                    name: 'The highest year',
                                    value: 0,
                                    xAxis: 7,
                                    yAxis: 183,
                                    symbolSize: 18
                                },
                                {
                                    name: 'Year minimum',
                                    value: 2.3,
                                    xAxis: 11,
                                    yAxis: 3
                                }
                            ]
                        },
                        markLine: {
                            data: [{
                                type: 'average',
                                name: 'average value'
                            }]
                        }
                    }
                ]
            };

            // Load data into the ECharts instance
            chartBasic.setOption(option);

            $(window).on('resize', function() {
                if (chartBasic != null && chartBasic != undefined) {
                    chartBasic.resize();
                }
            });
        </script> --}}


    </body>
@endsection


