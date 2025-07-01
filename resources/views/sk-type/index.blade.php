@php
    // dd($datas);
@endphp
<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Master Jenis SK & Kategori</h2>

        <div class="grid grid-cols-2 gap-6">
            {{-- SK Types --}}
            <div>
                <h3 class="font-semibold">Jenis SK</h3>
                <ul class="list-disc ml-6">
                    @foreach ($datas['skTyp'] as $type)
                        <li>{{ $type->nama }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- APS Reasons --}}
            <div>
                <h3 class="font-semibold">Alasan APS</h3>
                <ul class="list-disc ml-6">
                    @foreach ($datas['apsRsn'] as $r)
                        <li>{{ $r->nama }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Org Categories --}}
            <div>
                <h3 class="font-semibold">Kategori Organisasi</h3>
                <ul class="list-disc ml-6">
                    @foreach ($datas['orgCat'] as $c)
                        <li>{{ $c->nama }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Org Subcategories --}}
            <div>
                <h3 class="font-semibold">Subkategori Organisasi</h3>
                <ul class="list-disc ml-6">
                    @foreach ($datas['orgSubC'] as $s)
                        <li>{{ $s->orgSctOrgCat->nama }} → {{ $s->nama }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>
