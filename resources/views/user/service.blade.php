{{-- @dd($posts) --}}
<x-user-layout>

    @section('menuServices', 'active')

    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kategori</h6>
                <h1 class="mb-4">Apa Saja Jasa yang Tersedia?</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s" data-bs-toggle="modal"
                            data-bs-target="#dataOwnerModal">
                            <a class="position-relative d-block overflow-hidden card" href="#">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div
                                    class="bg-secondary bg-opacity-75 rounded-3 text-center position-absolute bottom-0 end-0 py-2 px-3 m-1">
                                    <h5 class="m-0 text-white">Layanan Rumah Tangga</h5>
                                    {{-- <small class="text-white">{{$postA}} Jasa</small> --}}
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s" data-bs-toggle="modal"
                            data-bs-target="#dataOwnerModal">
                            <a class="position-relative d-block overflow-hidden card" href="#">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div
                                    class="bg-opacity-75 bg-secondary rounded-3 text-center position-absolute bottom-0 end-0 py-2 px-3 m-1">
                                    <h5 class="m-0 text-white">Reparasi & Servis</h5>
                                    {{-- <small class="text-white">{{$postC}} Jasa</small> --}}
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s" data-bs-toggle="modal"
                            data-bs-target="#dataOwnerModal">
                            <a class="position-relative d-block overflow-hidden card" href="#">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div
                                    class="bg-secondary bg-opacity-75 rounded-3 text-center position-absolute bottom-0 end-0 py-2 px-3 m-1">
                                    <h5 class="m-0 text-white">Katering</h5>
                                    {{-- <small class="text-white">{{$postB}} Jasa</small> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;"
                    data-bs-toggle="modal" data-bs-target="#dataOwnerModal">
                    <a class="position-relative d-block h-100 overflow-hidden card" href="#">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt=""
                            style="object-fit: cover;">
                        <div
                            class="bg-secondary bg-opacity-75 rounded-3 text-center position-absolute bottom-0 end-0 py-2 px-3 m-1">
                            <h5 class="m-0 text-white">Bimbel</h5>
                            {{-- <small class="text-white">{{$postD}} Jasa</small> --}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Pencarian</h6>
        <h3 class="mb-4">Cari Apa yang Kamu Butuhkan</h3>
    </div>

    <div class="container rounded-3 mb-3">

        <div class="row">
            <div class="col-12">
                <div class="card card-margin">
                    <div class="card-body">
                        <div class="row search-body">
                            <div class="col-lg-12">
                                <div class="search-result">
                                    <div class="result-header">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="result-actions">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="result-body">
                                        <div class="table-responsive">

                                            <table id="tabeluser" class="table widget-26">
                                                <thead>
                                                    <tr>
                                                        <td>.</td>
                                                        <td>Identitas</td>
                                                        <td>Kategori</td>
                                                        <td>Layanan</td>
                                                        <td>Harga</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($posts as $o)
                                                        <tr data-bs-toggle="modal" aria-hidden="true"
                                                            class="table-row">
                                                            <td>
                                                                <div class="widget-26-job-emp-img">
                                                                    <img class="rounded-circle"
                                                                        src="{{ $o->user->profile_photo_url }}"
                                                                        alt="" />

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-info">
                                                                    <a class="m-0"
                                                                        href="{{ route('detail', $o->id) }}">
                                                                        {{ $o->user->name }}</a>
                                                                    <p class="text-muted m-0">di
                                                                        {{ $o->user->user_address }}
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-category bg-soft-danger px-3">
                                                                    @switch($o->kategori_jasa)
                                                                        @case('Tukang')
                                                                            <i class="fa fa-hammer me-2"></i>
                                                                        @break

                                                                        @case('Reparasi')
                                                                            <i class="fa fa-wrench me-2"></i>
                                                                        @break

                                                                        @default
                                                                            <i class="fa fa-book me-2"></i>
                                                                        @break
                                                                    @endswitch
                                                                    <span
                                                                        class="text-center">{{ $o->kategori_jasa }}
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-title">
                                                                    <div class="fw-medium small">{{ $o->title }}
                                                                    </div>
                                                                    <p class="m-0 small">{{ $o->body }}
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-salary">@currency($o->price)
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{-- @else
                                            <p>HARAP LOGIN</p>
                                            @endif --}}
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

    <div class="modal fade" id="dataOwnerModal" aria-labelledby="ownerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn btn-close" data-bs-target="#dataOwnerModel" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @include('user.owner-table')
                </div>
            </div>
        </div>
    </div>

</x-user-layout>
