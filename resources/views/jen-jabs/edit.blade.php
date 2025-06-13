<x-layout>
    {{-- {{ dd($model->kategori); }} --}}
    {{-- {{ dd($response) }} --}}
    <x-slot:titles>{{ $title }}</x-slot>
        <div>
            <p>かなたそ！！！</p>
            <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
        </div>
        <h2 class="text-xl font-bold mb-4">Edit Jenis Jabatan</h2>

        {{-- Tampilkan pesan error validasi --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-2 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form --}}
        <form method="POST" action="{{ route('jen-jabs.update',$model->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <input type="hidden" name="prevKat" id="prevKat" value="{{ $model->kategori }}">
            <div>
                <label for="kategori" class="block font-semibold">Kategori Jabatan :</label>
                <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $model->kategori) }}" class="border p-2 w-full rounded">
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('jen-jabs.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>

</x-layout>