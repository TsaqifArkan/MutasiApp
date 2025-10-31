<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Track Record History Mutation</h2>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nomor SK</th>
                        <th>Pegawai</th>
                        <th>Unit Before</th>
                        <th>Unit After</th>
                        <th>Jenis Mutasi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datas as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->histMutRecSk->full_no_sk ?? '-' }}</td>
                            <td>{{ $d->histMutEmp->nama ?? '-' }}</td>
                            <td>{{ $d->histMutUKBef->nama ?? '-' }}</td>
                            <td>{{ $d->histMutUKAft->nama ?? '-' }}</td>
                            <td>{{ $d->histMutJenMut->nama ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $datas->links() }}

        </div>

    </div>

</x-layout>
