<footer id="footer" class="clearfix bg-style ft-home-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                @php
                    $ppdb = \App\Models\footeer::all();
                @endphp
                @foreach ($ppdb as $ppdb)
                    <div class="widget widget-logo">
                        <div class="logo-footer" id="logo-footer">
                            <a href="#">
                                <img id="logo_footer" src="{{ asset('fotomahasiswa/' . $ppdb->foto) }}" alt="nft-gaming"
                                    width="120" height="100" style="margin-left:50px;">
                            </a>
                        </div>
                        <p class="sub-widget-logo">{!! $ppdb->deskripsi_footeer !!}</p>
                        <div class="widget-social">
                            <ul>
                                <li><a href="https://www.facebook.com/smkmuhigenteng"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                {{--  <li><a href="#"><i class="fab fa-gmail"></i></a></li>  --}}
                                <li><a href="https://www.instagram.com/muhi.ig/?next=%2F&hl=id"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fal fa-envelope"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCJOjJCbfEcApeNYmDJ4tCCw"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-7e06bf3a-c3dd-4ad3-a974-4f6c4b30ba1e"></div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="widget widget-menu menu-supports">
                    <h5 class="title-widget">Lainnya</h5>
                    @php
                        $link = \App\Models\Footeerdua::all();
                    @endphp
                    <ul>
                        @foreach ($link as $pp)
                            <li><a href="{{ $pp->link }}">{{ $pp->judul }}</a></li>
                        @endforeach
                        <li><a href="/pendaftaran">PPDB</a></li>

                    </ul>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="widget widget-post">
                    <h5 class="title-widget">Berita </h5>
                    @php
                        $muhiberita = \App\Models\Muhinews::orderBy('created_at','desc')->paginate(3);
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
        </div>
    </div>
</footer>

<div class="bottom">
    <div class="container">
        <div class="bottom-inner">
            Copyright ?? 2022 at SMK Muhammadiyah 1 Genteng. Supported by <a
                href="/authors"> Team Zoe</a>
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
