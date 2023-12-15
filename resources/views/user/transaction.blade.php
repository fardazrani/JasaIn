<x-user-layout>

    <div class="bg-light">
        <div class="container rounded py-5">
            <div class="row p-4">
                <div class="col-3">
                    <div class="m-3 h2 fw-bolder text-primary">Daftar Transaksi</div>
                </div>
                <div class="col-9">
                    <div class="m-3 result-body card">
                        <div class="table-responsive">
                            <table class="table table-bordered border-secondary">
                                <thead class="bg-secondary text-sm">
                                    <tr class="text-center text-white">
                                        <th>Pesanan</td>
                                        <th>Penyewa</th>
                                        <th>Owner</th>
                                        <th>Id-ku</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                    </tr>
                                <tbody class="text-sm">
                                    @foreach ($transaksi as $p)
                                        <tr>
                                            <td>{{ $p->getPostID->title }}</td>
                                            <td>{{ $p->getUserID->name }} </td>
                                            <td>{{ $p->getPostID->user->name }} </td>
                                            <td>{{ $p->getUserID->id }} </td>
                                            <td>@currency($p->getPostID->price)</td>
                                            <td>{{ $p->status }}</td>
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

</x-user-layout>
