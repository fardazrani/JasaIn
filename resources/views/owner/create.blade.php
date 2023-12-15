<x-owner-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>

    @section('menuCreate', 'selected')
    <div>
        <div class="max-w-7xl mx-auto py-3 sm:px-6 lg:px-8 ">
            <h4 class="fw-light">Tambahkan Jasa yang Ingin Anda Tawarkan</h4>
            <div class="my-4 col-5 px-4">
                <form action="/dashboard/store" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group my-1">
                            <label for="title">Nama Jasa</label>
                            <input type="text" name="title" placeholder="Apa yang kamu tawarkan?" id="title"
                                class="form-control">
                        </div>
                        <div class="form-group mt-3 mb-1">
                            <label for="body">Deskripsi</label>
                            <textarea name="body" placeholder="Mungkin bisa dideskripsikan dulu..." id="body" class="form-control" cols="30"
                                rows="4"></textarea>
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kategori_jasa">Pilih Jenis Jasa</label>
                                <select name="kategori_jasa" id="kategori_jasa" class="form-select">
                                    <option value="Layanan">Layanan Rumah tangga</option>
                                    <option value="Tukang">Tukang</option>
                                    <option value="Reparasi">Reparasi</option>
                                    <option value="Bimbel">Bimbingan Belajar</option>
                                    <option value="Katering">Katering</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="price">Harga (Rp)</label>
                                <input type="text" name="price" placeholder="0,00" id="price"
                                    class="form-control price">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" name="submit" class="btn btn-primary"><i
                                class="me-2 fa fa-plus"></i>Tambah</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


</x-owner-layout>
