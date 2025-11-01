<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Daftar SK dengan Berbagai Jenisnya</h2>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nomor SK</th>
                        <th>Jenis</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datas as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->jenSkMutRecSk->full_no_sk ?? '-' }}</td>
                            <td>{{ $d->jenSkMutJenMut->nama ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $datas->links() }}

        </div>

    </div>

</x-layout>
