@extends('layout.main')

@section('content')
    
<div class="container-fluid">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Form Pendaftaran</h6>
                {{-- <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Veltrix</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Repeater</li>
                </ol> --}}
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    {{-- <div class="dropdown">
                        <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-cog me-2"></i> Settings
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->



    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Example</h4>
                    <form class="repeater" enctype="multipart/form-data">
                        <div data-repeater-list="group-a">
                            <div class="row" data-repeater-item>
                                <div  class="mb-3 col-lg-2">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="untyped-input" class="form-control" placeholder="Enter your name"/>
                                </div>
                                <!-- end col -->
                                <div  class="mb-3 col-lg-2">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Enter your email"/>
                                </div>
                                <!-- end col -->
                                <div  class="mb-3 col-lg-2">
                                    <label class="form-label" for="subject">Subject</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Enter your subject"/>
                                </div>
                                <!-- end col -->
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label" for="resume">Resume</label>
                                    <input type="file" class="form-control" id="resume">
                                    
                                </div>
                                <!-- end col -->
                                <div class="mb-3 col-lg-2 col-sm-8">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea id="message" class="form-control" placeholder="Isi pesan..."></textarea>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-2 col-sm-4 align-self-center">
                                    <div class="d-grid">
                                        <input data-repeater-delete type="button" class="btn btn-primary mb-2" value="Delete"/>
                                    </div>    
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-2 mt-sm-0" value="Add"/>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Masukkan data diri</h4>
                    <form class="outer-repeater">
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">
                                <div class="mb-3">
                                    <label class="form-label" for="formname">Nama :</label>
                                    <input type="text" class="form-control" id="formname" placeholder="Isi namamu...">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formemail">Email :</label>
                                    <input type="email" class="form-control" id="formemail" placeholder="Isi emailmu...">
                                </div>

                                <div class="inner-repeater mb-4">
                                    <div data-repeater-list="inner-group" class="inner mb-3">
                                        <label class="form-label">No telpon :</label>
                                        <div data-repeater-item class="inner mb-3 row">
                                            <div class="col-md-10 col-sm-8">
                                                <input type="text" class="inner form-control" placeholder="Isi nomermu..."/>
                                            </div>
                                            <div class="col-md-2 col-sm-4">
                                                <div class="d-grid">
                                                    <input data-repeater-delete type="button" class="btn btn-primary inner mt-2 mt-sm-0" value="Delete"/>
                                                </div>    
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success inner" value="Add Number"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label mb-3 d-flex">Jenis kelamin :</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input">
                                        <label class="form-check-label" for="customRadioInline1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
                                        <label class="form-check-label" for="customRadioInline2">Perembuan</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formmessage">Pesan :</label>
                                    <textarea id="formmessage" class="form-control" rows="3" placeholder="Isi pesan..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    
</div>

@endsection