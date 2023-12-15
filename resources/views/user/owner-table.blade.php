<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title bg-white text-center text-primary px-3">Pencarian</h6>
    <h3 class="mb-4">Cari Apa yang Kamu Butuhkan</h3>
</div>

<div class="container rounded-3 mb-3">
    <div class="card">
        <div class="card-body">
            <br>
            <div class="table-responsive">
                <table id="listOwnerPostTable" class="widget-26 table">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Identitas</td>
                            <td>Kategori</td>
                            <td>Layanan</td>
                            <td>Harga</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $o)
                            <tr>
                                <td>
                                    <div class="widget-26-job-emp-img">
                                        <img class="rounded-circle" src="{{ $o->user->profile_photo_url }}" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="widget-26-job-info">
                                        <a class="m-0" href="{{ route('detail', $o->id) }}">
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
                                        <span class="text-center">{{ $o->kategori_jasa }}
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
            </div>
        </div>
    </div>
</div>

</div>
</div>
