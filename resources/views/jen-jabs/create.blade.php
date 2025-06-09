<x-layout>
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
                <label for="kategori" class="block font-semibold">Kategori:</label>
                <select name="kategori" id="kategori" class="border p-2 w-full rounded" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Struktural" {{ old('kategori') == 'Struktural' ? 'selected' : '' }}>Struktural
                    </option>
                    <option value="Fungsional" {{ old('kategori') == 'Fungsional' ? 'selected' : '' }}>Fungsional
                    </option>
                </select>
            </div>
            <div>
                <label for="nama" class="block font-semibold">Nama Jabatan:</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="border p-2 w-full rounded"
                    required>
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('jen-jabs.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
</x-layout>