t<x-owner-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <h1 class="text-center">Halaman Edit</h1>
            <hr>
            <table id="tabelowner" border="0">
                <thead>
                    <tr>
                        <td>Judul POst</td>
                        <td>Deskripsi</td>
                        <td>Harga</td>
                        <td>Aksi</td>
                    </tr>  
                </thead>
                <tbody>
                    @foreach ($posts as $p)
                <tr>
                    <td><h5>{{$p->title}}</h5></td>
                    <td><p>{{$p->body}}</p></td>
                    <td><p>@currency($p->price)</p></td>
                    <td><a href="/dashboard/{{$p->id}}/edit">Edit Postingan</a></td>
                </tr>
                
                @endforeach
                </tbody>
                
            </table>
            <br>
            {{-- <p>{{$p->body}}</p> --}}
        </div>
        
    </div>
</x-owner-layout>
