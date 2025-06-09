<x-layout>
    <?php $i = 1; ?>
    <x-slot:titles>{{ $title }}</x-slot>
        <h3 class="text-xl">Ini Adalah Halaman Seluruh SK</h3>
        <div class="font-bold text-3xl my-5">ぜんぶのスラツケプツサン</div>
        <table class="table-auto w-full border-separate border border-gray-400">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 w-24">No.</th>
                    <th class="border border-gray-300 px-4 py-2">Periode</th>
                    <th class="border border-gray-300 px-4 py-2">Tanggal SK</th>
                    <th class="border border-gray-300 px-4 py-2">Nomor SK</th>
                    <th class="border border-gray-300 px-4 py-2">Jenis SK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataAllSK as $j)
                    <tr class="">
                        <td class="border border-gray-300 px-4 py-2 w-24">{{ $i++ }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->periode }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->tgl_sk }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->no_sk }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->jenis_sk }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</x-layout>