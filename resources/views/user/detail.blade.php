<x-user-layout>
    <div>
        <!-- Carousel Start -->
        <h3>Halaman Detail</h3>
        <form action="/{{Auth::user()->id}}/{{ $post -> id }}/detail/pay" method="POST">
        @csrf
        <h4>{{ $post -> title}}</h4>
        <h5>{{ $post -> body}}</h5>
        <h5> @currency ( $post -> price ) </h5>
        <h5>{{ $post -> user -> name}}</h5>
        <h5>{{ $post -> kategori_jasa}}</h5>
                <button type="submit" name="submit" class="btn btn-primary">Booking Sekarang</button>
            </form>
        <!-- Carousel End -->
    </div>
</x-user-layout>
