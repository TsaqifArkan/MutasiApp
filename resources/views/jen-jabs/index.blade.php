<x-layout>
    <?php $i = 1; ?>
    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <x-slot:titles>{{ $title }}</x-slot>
        <h3 class="text-xl">Ini Adalah Halaman Jenis Jabatan</h3>
        <div class="font-bold text-3xl my-5">ジェニスジャバタンです！</div>
        {{-- <a href="{{ route('jen-jabs.create') }}">Tambah Data</a> --}}
        <a href="{{ route('jen-jabs.create') }}"
            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-hidden focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
            Tambah Data
        </a>
        <table class="table-auto w-1/2 border-separate border border-gray-400 mt-5">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 w-24">No.</th>
                    <th class="border border-gray-300 px-4 py-2">Kategori</th>
                    <th class="border border-gray-300 px-4 py-2">SubKategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataJenJab as $j)
                    <tr class="">
                        <td class="border border-gray-300 px-4 py-2 w-24">{{ $i++ }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->kategori }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</x-layout>