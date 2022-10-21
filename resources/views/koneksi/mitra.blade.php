<section class="brand-one brand-one__pricing-page brand-one__home-three" id='mitra'>
    <div class="container">
        <div class="block-title text-center">
            <p class="color-2"><span>Bekerja sama dengan</span></p>
            {{-- <h3>Trusted by Over 25,000 World’s <br> <span>Leading Companies</span></h3> --}}
        </div><!-- /.block-title text-center -->

        @php
            $data = \App\Models\Mitra::all();
        @endphp
        
        <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme"
        data-options='{
            "items": 5, "margin": 95, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {"0": { "margin": 20, "items": 2 }, "575": { "margin": 30, "items": 3 },"767": { "margin": 40, "items": 4 },   "991": { "margin": 70, "items": 4 }, "1199": { "margin": 95, "items": 5 } } }'>
            @foreach ( $data as $d )
                
            <div class="item">
                <img src="{{ asset('fotomahasiswa/' . $d->foto_mitra) }}"
                alt="">
            </div><!-- /.item -->
            @endforeach
            
        </div><!-- /.brand-one__carousel owl-carousel thm__owl-carousel owl-theme -->
    </div><!-- /.container -->
</section><!-- /.brand-one -->