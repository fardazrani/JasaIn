<x-owner-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <h4>Update </h4>
            <hr>
            <div class="my-4 col-5 px-4">
                <form action="/dashboard/{{ $posts->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Judul</label>
                        <input type="text" name="title" value="{{ $posts->title }}" id="name"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="body">Deskripsi</label>
                        <input type="text" name="body" value="{{ $posts->body }}" id="email"
                            class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="price">Harga</label>
                        <input type="text" name="price" value="{{ $posts->price }}"
                            id="user_address" class="form-control">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary"><i
                            class="fa fa-edit me-2"></i>Perbarui</button>
                            <form action="/dashboard/{{$posts->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger m-1"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                </form>
            </div>
        </div>
    </div>
</x-owner-layout>
