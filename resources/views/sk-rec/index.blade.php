<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <h3 class="text-xl">Ini Adalah Halaman Seluruh SK</h3>
    <div class="font-bold text-3xl my-5">ぜんぶのスラツケプツサン</div>
    <a href="{{ route('sk-rec.create') }}"
        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-hidden focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
        Tambah Data
    </a>

    <table class="table-auto w-full border-separate border border-gray-400">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2 w-24">No.</th>
                {{-- <th class="border border-gray-300 px-4 py-2">Periode</th> --}}
                <th class="border border-gray-300 px-4 py-2">Tanggal SK</th>
                <th class="border border-gray-300 px-4 py-2">Nomor SK</th>
                <th class="border border-gray-300 px-4 py-2">Jumlah ASN</th>
                <th class="border border-gray-300 px-4 py-2">Jenis SK</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataAllSK as $i => $j)
                <tr class="">
                    <td class="border border-gray-300 px-4 py-2 w-24">{{ $i + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ \Carbon\Carbon::parse($j->tgl_sk)->translatedFormat('d F Y') }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $j->no_sk }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $j->jml_asn }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $j->jenis_sk }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center space-x-2">
                        <a href="{{ route('sk-rec.edit', $j->id) }}"
                            class="inline-block px-3 py-1 text-sm bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('sk-rec.destroy', $j->id) }}" method="POST" class="inline-block"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600">
                                Hapus
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
