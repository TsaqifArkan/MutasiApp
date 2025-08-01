<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <div class="p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4">Jabatan Struktural</h2>

        <div class="grid grid-cols-2 gap-6">
            {{-- Jabatan --}}
            <div>
                <h3 class="font-semibold">Jabatan</h3>
                <ul class="list-disc ml-6">
                    @foreach ($datas as $jab)
                        <li>{{ $jab->nama }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-layout>
