<x-admin-layout>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <h5 class="text-center fw-light">Daftar Akun Pelanggan dan Penyedia Jasa</h5>
            <hr>
            <div class="m-4 result-body">
                <div class="table-responsive">
                    <table id="listUsersTable" class="table table-bordered border-secondary">
                        <thead class="bg-secondary text-sm">
                            <tr class="text-center">
                                <th>Id</td>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No. Telepon</th>
                                <th>Dibuat</th>
                                <th>Diperbarui</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        <tbody class="text-sm">
                            @foreach ($users as $u)
                                <tr>
                                    <td>
                                        <div class="">{{ $u->id }}</div>
                                    </td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->user_address }}</td>
                                    <td>{{ $u->user_phone_number }}</td>
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
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
