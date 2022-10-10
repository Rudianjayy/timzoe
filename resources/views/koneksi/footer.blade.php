<footer id="footer" class="clearfix bg-style ft-home-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="widget widget-logo">
                    <div class="logo-footer" id="logo-footer">
                        <a href="#">
                            <img id="logo_footer" src="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}"
                                alt="nft-gaming" width="110" height="45"
                                data-retina="{{ asset('landing/html/bidzend/assets/icon/muhilog.png') }}"
                                data-width="110" data-height="45">
                        </a>
                    </div>
                    <p class="sub-widget-logo">Dari SMK Muhammadiyah 1 Genteng <br>
                        "SMKS Muhammadiyah 1 Genteng di dirikan pada tahun 02 Januari 1968. SMK yang terdiri dari
                        beberapa jurusan antara lain : 1. Teknik Komputer Jaringan dan Telekomunikasi 2. Desain
                        Komunikasi Visual 3. Manajemen Perkantoran dan Layanan Bisnis 4. Akuntansi dan Keuangan Lembaga
                        5. Pemasaran 6. Perhotelan"</p>
                    <div class="widget-social">
                        <ul>
                            <li><a href="https://www.facebook.com/smkmuhigenteng"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            {{--  <li><a href="#"><i class="fab fa-gmail"></i></a></li>  --}}
                            <li><a href="https://www.instagram.com/muhi.ig/?next=%2F&hl=id"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCJOjJCbfEcApeNYmDJ4tCCw"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-7e06bf3a-c3dd-4ad3-a974-4f6c4b30ba1e"></div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="widget widget-post">
                    <h5 class="title-widget">Berita </h5>
                    @php
                        $muhiberita = \App\Models\Muhinews::all();
                    @endphp
                    <ul class="post-new">
                        @foreach ($muhiberita as $mb)
                            <li>
                                <div class="post-img">
                                    <img src="{{ asset('fotomahasiswa/' . $mb->foto) }}" alt="Post New">
                                </div>
                                <div class="post-content">
                                    <h6 class="title"><a href="/muhinews">{{ $mb->deskripsi_muhinews }}</a></h6>
                                    <a href="/muhinews" class="post-date"><i
                                            class="far fa-calendar-week"></i>{{ $mb->created_at }}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="widget widget-menu menu-supports">
                    <h5 class="title-widget">Admin</h5>
                    <ul>
                        <li><a href="/login">Login Admin </a></li>
                        <li><a href="contact.html">Help & Support </a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</footer>

<div class="bottom">
    <div class="container">
        <div class="bottom-inner">
            Copyright © 2022 at SMK Muhammadiyah 1 Genteng. Supported by <a
                href="https://www.instagram.com/timzoe_/?next=%2F&hl=id"> Team Zoe</a>
        </div>
    </div>
</div>
</div>

</div>

<a id="scroll-top"></a>

<div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40">
                <h3 class="text-center">Your Bidding
                    Successfuly Added</h3>
                <p class="text-center">your bid <span class="price color-popup">(5.23ETH) </span> has been
                    listing
                    to our database</p>
                <a href="#" class="btn btn-primary"> Watch the listings</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    </div>
</div>
