<x-user-layout>
    <div>
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center bg-opacity-50"
                        style="background: #0D0c6aa2;">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Butuh Jasa Segera?
                                    </h5>
                                    <h1 class="display-3 text-white animated slideInDown">Segera Daftar dan Cari Apa
                                        yang Kamu
                                        Butuhkan</h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Tenang, kamu bisa menggunakan JasaIn untuk
                                        membantu
                                        menyelesaikan masalahmu.</p>
                                    <a href="{{ route('carijasa') }}"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cari Jasa
                                        Sekarang!</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center bg-opacity-50"
                        style="background: #0D0c6aa2;">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Tidak Mencari
                                        Jasa?</h5>
                                    <h1 class="display-3 text-white animated slideInDown">Tenang, Kamu Juga Bisa Menjadi
                                        Penyedia Jasa</h1>
                                    <p class="fs-5 text-white mb-4 pb-2">JasaIn akan membantu mempromosikan dan
                                        menyebarluaskan
                                        jasa yang kamu tawarkan.</p>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Gabung
                                            Jadi
                                            Penyedia Jasa</a>
                                    @endif
                                    <a href="{{ route('tentang') }}"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Saya masih ragu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
</x-user-layout>
