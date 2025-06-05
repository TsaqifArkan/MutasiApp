<?php $i = 1; ?>
<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
        <h3 class="text-xl">Ini Adalah Halaman Jenis Jabatan</h3>
        <div class="font-bold text-3xl my-5">ジェニスジャバタンです！</div>
        <table class="table-auto w-1/2 border-separate border border-gray-400">
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