<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <h4 class="text-center fw-light">Daftar Jasa Owner</h4>
            <hr>
            <div class="m-4 result-body">
                <div class="table-responsive">
                    <table id="listOwnerPostTable" class="table table-bordered border-secondary">
                        <thead class="bg-secondary text-sm">
                            <tr class="text-center">
                                <th>Owner</th>
                                <th>Jasa</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        <tbody class="text-sm">
                            @foreach ($posts as $p)
                                <tr>
                                    <td>{{ $p->user->name }}</td>
                                    <td>{{ $p->title }}</td>
                                    <td>{{ $p->kategori_jasa }}</td>
                                    <td>{{ $p->body }}</td>
                                    <td>@currency($p->price)</td>
                                    {{-- <td>{{ $u->user_phone_number }}</td>
                                    <td>
                                        <div class="">{{ $u->created_at }}</div>
                                    </td>
                                    <td>{{ $u->updated_at }}</td>
                                    <td>{{ $u->role->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/dashboard/{{ $u->id }}/account"
                                                class="btn btn-secondary m-1"><i class="fa fa-pencil"></i></a>

                                            <form action="/dashboard/{{ $u->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger m-1"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>

                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        {{-- <h3>Halaman Post Admin</h3>
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <hr>
                <table border="0">
                    <thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $p)
                            <tr>
                                <td>
                                    <h5>{{ $p->title }}</h5>
                                </td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $p->body }}</p>
                                </td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>
                                    <p>@currency($p->price)</p>
                                </td>
                                <td></td>
                                <td></td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
                <br>

            </div> --}}

    </div>

    </div>
    </div>
</x-admin-layout>
