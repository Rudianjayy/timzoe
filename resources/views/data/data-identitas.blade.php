@extends('layout.main')

@section('content')
<head>
    @include('layout.css')
</head>
<body>


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    {{--  <h4 class="card-title">Jquery Steps Wizard</h4>  --}}


                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                        <h4>Form PPDB</h4>
                        <p class="card-title-desc">Silahkan melengkapi data profil kalian sesuai dengan form yang disediakan. Jika terdapat tanda bintang (*) . maka wajib diisi</p>
                        <h3 class="text-center">Identitas Diri & Informasi Orang Tua</h3>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">NISN *</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control" placeholder="NISN">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Nama Ayah *</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control" placeholder="Enter your number">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Nama Lengkap *</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Kerja Ayah</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Panggilan *</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control" placeholder="Panggilan">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Telepon Ayah *</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">Jenis Kelamin *</label>
                                        <div class="col-lg-9">
                                            <input type="radio" id="txtCityBilling" name="txtCityBilling" class="form-check-input">
                                            <label class="form-check-label" for="customRadioInline1">Laki-Laki</label>
                                            <input type="radio" id="txtCityBilling" name="txtCityBilling" class="form-check-input">
                                            <label class="form-check-label" for="customRadioInline1">Perempuan</label>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Alamat Ayah *</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control" placeholder="Enter your first address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Tempat Lahir *</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Nama Ibu *</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Tanggal Lahir *</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="date" class="form-control" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Kerja Ibu *</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Agama *</label>
                                        <div class="col-lg-9">
                                            <select class="form-select" name="" id="" class="form-control">
                                                <option value="">-Pilih-</option>
                                                <option>Islam</option>
                                                <option>Hindu</option>
                                                <option>Kristen</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Telepon Ibu *</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Alamat *</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control" placeholder="Enter your first address"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Alamat Ibu *</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control" placeholder="Enter your first address"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Provinsi *</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Product Sub Category</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Kota/kab *</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Product Sub Category</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Telepon *</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label">Product Sub Category</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        <h3>Company Document</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">PAN Card</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping" type="text" class="form-control" placeholder="Enter pancard number">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtLastNameShipping" class="col-lg-3 col-form-label">VAT/TIN No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control" placeholder="Enter tin number">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtCompanyShipping" class="col-lg-3 col-form-label">CST No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyShipping" name="txtCompanyShipping" type="text" class="form-control" placeholder="Enter csr number">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Service Tax No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressShipping" name="txtEmailAddressShipping" type="text" class="form-control" placeholder="Service tax number">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtCityShipping" class="col-lg-3 col-form-label">Company UIN</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control" placeholder="Enter uin pin">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Declaration</label>
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping" name="txtStateProvinceShipping" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        <h3>Bank Details</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Name on Card</label>
                                        <div class="col-lg-9">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control" placeholder="Enter card name">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Credit Card Type</label>
                                        <div class="col-lg-9">
                                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-select">
                                                <option value="">--Please Select--</option>
                                                <option value="AE">American Express</option>
                                                <option value="VI">Visa</option>
                                                <option value="MC">MasterCard</option>
                                                <option value="DI">Discover</option>
                                            </select>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Credit Card Number</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control" placeholder="Enter credit card number">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Card Verification Number</label>
                                        <div class="col-lg-9">
                                            <input id="txtCardVerificationNumber" name="txtCardVerificationNumber" type="text" class="form-control" placeholder="Enter verification number">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label">Expiration Date</label>
                                        <div class="col-lg-9">
                                            <input id="txtExpirationDate" name="txtExpirationDate" type="text" class="form-control" placeholder="DD /MM /YYYY">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        {{--  <h3>Confirm Detail</h3>  --}}
                        <fieldset>
                            <div class="p-3">
                                {{--  <div class="">
                                    <input type="checkbox" class="form-check-input me-2" id="customCheck1">
                                    <label class="form-label" for="customCheck1">I agree with the Terms and Conditions.</label>
                                </div>
  --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </div> <!-- row end -->
@include('layout.script')
</body>

@endsection
