<x-layout>
    <?php $i = 1; ?>
    <?php //dd($dataSKJab[0]); ?>
    <x-slot:titles>{{ $title }}</x-slot>
        <h3 class="text-xl">Ini Adalah Halaman Seluruh SK Beserta Jabatan</h3>
        <div class="font-bold text-3xl my-5">ぜんぶのスラツケプツサンとジャバタン</div>
        <table class="table-auto w-full border-separate border border-gray-400">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 w-24">No.</th>
                    <th class="border border-gray-300 px-4 py-2">Nomor SK</th>
                    <th class="border border-gray-300 px-4 py-2">Jabatan</th>
                    <th class="border border-gray-300 px-4 py-2">Sub Jabatan</th>
                    <th class="border border-gray-300 px-4 py-2">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataSKJab as $j)
                    <tr class="">
                        <td class="border border-gray-300 px-4 py-2 w-24">{{ $i++ }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->skDetJab->no_sk }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->skJenJab->kategori }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->skJenJab->nama }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $j->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</x-layout>