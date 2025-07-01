@php
    // dd($datas);
@endphp
<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Golongan ASN</h2>

        <div class="grid grid-cols-2 gap-6">
            {{-- Golongan --}}
            <div>
                <h3 class="font-semibold">Golongan</h3>
                <ul class="list-disc ml-6">
                    @foreach ($datas as $gol)
                        <li>{{ $gol->nama }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>
