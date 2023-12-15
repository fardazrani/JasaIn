<x-user-layout>
    <div class="bg-light">

        <div class="container">
            <div class="row gutters-sm py-5">
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ $post->user->profile_photo_url }}" alt="/img/logo.png"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $post->user->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $post->user->email }}</p>
                                    <p class="text-secondary mb-1">{{ $post->user->telepon }}</p>
                                    <p class="text-muted font-size-sm">{{ $post->user->user_address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body border-0">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="mb-2">{{ $post->title }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-black-50">
                                    {{ $post->body }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-1 center">
                                    <span class="fa fa-map-marker-alt mx-2"></span>
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Kategori</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    {{ $post->kategori_jasa }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-1 center">
                                    <span class="fa fa-price mx-2">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0"></span>Harga</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    @currency($post->price)
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-end">
                                <div class="col-sm-7 text-end">
                                    <span class="fw-normal mx-3 text-primary">Anda butuh jasa ini?</span>
                                    @if (Auth::check())
                                        <form action="{{ route('booking', $post->id) }}" method="POST">
                                            @csrf
                                            <button class="btn btn-primary px-2" type="submit" name="submit"><i
                                                    class="fa fa-accept"></i>Booking!</button>
                                        </form>
                                    @else
                                        <a class="btn btn-outline-secondary" class="fw-bolder"
                                            href="{{ route('login') }}">Maaf, login dahulu</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <form action="/{{ Auth::user()->id }}/{{ $post->id }}/detail/pay" method="POST">
        @csrf
        <h4>{{ $post->title }}</h4>
        <h5>{{ $post->body }}</h5>
        <h5> @currency ( $post -> price ) </h5>
        <h5>{{ $post->user->name }}</h5>
        <h5>{{ $post->kategori_jasa }}</h5>
        <button type="submit" name="submit" class="btn btn-primary">Booking Sekarang</button>
    </form> --}}

</x-user-layout>
