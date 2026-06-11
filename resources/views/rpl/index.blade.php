<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <h3 class="text-xl">テストレンぺーぐラースと</h3>
    <h3>{{ $name }}</h3>
    <table class="w-full text-sm border mt-4">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">NIP</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Jabatan</th>
                <th class="p-2 border">Unit Kerja</th>
                <th class="p-2 border">Jenis Pegawai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="p-2 border">{{ $item->nip }}</td>
                    <td class="p-2 border">{{ $item->nama }}</td>
                    <td class="p-2 border">{{ $item->jabatan }}</td>
                    <td class="p-2 border">{{ $item->s_skt_instansiunitorg }}</td>
                    <td class="p-2 border">{{ $item->status_pegawai }}</td>
                </tr>
            @endforeach
        </tbody>
</x-layout>
