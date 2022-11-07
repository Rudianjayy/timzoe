@extends('layout.main')
@push('css')
  
@endpush
<br><br>
@section('content')
<head>
    @include('layout.css')
</head>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="container-fluid">
                    <div class="card">
                        {{-- <div class="row justify-content-center">
                    <div class="col-sm-9"> --}}
                        <h1 class="text-center">Deskripsi Detail</h1>
                        <div class="container">
                            <div class="mb-3">
                                {!! $data->deskripsi_detail2 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
