<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <h3>Halaman Edit Data</h3>
            <div class="my-4 col-5 px-4">
                <form action="/dashboard/{{ $users->id }}/update" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group mt-3">
                        <label for="name">Nama</label>
                        <input type="text" name="name" placeholder="Nama" value="{{ $users->name }}" id="name"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email" value="{{ $users->email }}" id="email"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="user_address">Alamat</label>
                        <input type="text" name="user_address" placeholder="Alamat" value="{{ $users->user_address }}"
                            id="user_address" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="user_phone_number">Telepon</label>
                        <input type="tel" name="user_phone_number" placeholder="Telepon"
                            value="{{ $users->user_phone_number }}" id="user_phone_number" class="form-control">
                    </div>
                    <button type="submit" name="submit" value="save" class="btn btn-primary"><i
                            class="fa fa-edit me-2"></i>Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
