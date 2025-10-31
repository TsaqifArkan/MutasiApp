<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Daftar Pegawai BPKP</h2>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIP Int</th>
                        <th>NIP Ext</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Peran</th>
                        <th>Pangkat/Gol</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datas as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->nip_int ?? '-' }}</td>
                            <td>{{ $d->nip_ext_spc ?? '-' }}</td>
                            <td>{{ $d->nama ?? '-' }}</td>
                            <td>{{ $d->jabatan ?? '-' }}</td>
                            <td>{{ $d->peran ?? '-' }}</td>
                            <td>{{ $d->empGpkt->pangkat . ', ' . $d->empGpkt->gol ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $datas->links() }}

        </div>

    </div>

</x-layout>
