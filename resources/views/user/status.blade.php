<x-user-layout>
    <div>
        <!-- Carousel Start -->
        <h3>Halaman Status</h3>
        <!-- Carousel End -->
        <table border="1">
            <thead>
                <tr>
                    <td>Pesanan</td>
                    <td>Penyewa Jasa</td>
                    <td>Nama Penyewa</td>
                    <td>Nama Pemiliki Jasa</td>
                    <td>Harga</td>
                    <td>Keterangan</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $p)
                <tr>
                    <td>{{ $p->getPostID->title }}</td>
                    <td>{{ $p->getUserID->name}} </td>
                    <td>{{ $p->getPostID->user->name }} </td>
                    <td>{{ $p->getUserID->id}} </td>
                    <td>@currency($p->getPostID->price)</td>
                    <td>{{ $p->status}}</td>
                </tr>
                @endforeach
                
                {{-- @foreach ($post as $p)
                <tr>
                    <td>{{ $p ->  title }}</td>
                    <td>{{ $p -> user -> name }}</td>
                    <td>{{ $p ->  price}}</td>

                </tr>
                    {{-- <td>{{ $p -> getTransactionPost -> status}}</td> --}}
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</x-user-layout>
