<x-layout>
    {{-- {{ dd($response) }} --}}
    <x-slot:titles>{{ $title }}</x-slot>
        <div>
            <p>あずきち大好き！！！</p>
            <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
        </div>
        <h2 class="text-xl font-bold mb-4">Tambah Jenis Jabatan</h2>

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
        <form method="POST" action="{{ route('jen-jabs.store') }}" class="space-y-4">
            @csrf

            <div>
                <label for="kategori" class="block font-semibold">Kategori Jabatan :</label>
                <input type="text" name="kategori" id="kategori" value="{{ old('kategori') }}" class="border p-2 w-full rounded">
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('jen-jabs.index') }}" type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-500 text-white hover:bg-gray-600 focus:outline-hidden focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
                    ← Kembali
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>

</x-layout>