<x-layout>
    {{-- {{ dd($response) }} --}}
    <x-slot:titles>{{ $title }}</x-slot>
    <div>
        <p>坂又クロエ大好き！！！</p>
    </div>
    <h2 class="text-xl font-bold mb-4">Edit Surat Keputusan Mutasi</h2>

    {{-- Tampilkan pesan error validasi --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="max-w-4xl mx-auto p-6 bg-white rounded shadow">
        {{-- Form --}}
        <form method="POST" action="{{ route('sk-rec.update', $sk_rec->id) }}" class="space-y-4" x-data="{
            form: { sk_type: '{{ old('sk_typ_id', $sk_rec->sk_typ_id) }}', org_cat: '{{ old('og_cat_id', $sk_rec->og_cat_id) }}' },
            clearIrrelevantFields() {
                let type = this.form.sk_type + '';
                if (type == '{{ $skTypes->firstWhere('nama', 'Organisasi')->id }}') {
                    // kosongkan APS-only selects
                    $refs.aps_reason.value = '';
                    $refs.golongan.value = '';
                } else if (type == '{{ $skTypes->firstWhere('nama', 'Atas Permintaan Sendiri (APS)')->id }}') {
                    // kosongkan Org-only selects
                    $refs.org_cat.value = '';
                    $refs.org_subcat.value = '';
                    $refs.jabatan.value = '';
                }
            }
        }"
            x-init ="clearIrrelevantFields()" x-effect="clearIrrelevantFields()">
            @csrf
            @method('PUT')
            @include('sk-rec._form', [
                'mode' => 'edit',
                'skRecord' => $sk_rec,
                'skTypes' => $skTypes,
                'orgCategs' => $orgCategs,
                'apsReasons' => $apsReasons,
                'golongans' => $golongans,
                'jabatans' => $jabatans,
            ])
        </form>
    </div>
</x-layout>
