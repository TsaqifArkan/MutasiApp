@props(['mode', 'skRecord', 'skTypes', 'orgCategs', 'apsReasons', 'golongans', 'jabatans'])

@php
    // Default values jika tidak sedang edit
    $selectedSkType = old('sk_typ_id', $skRecord?->sk_typ_id);
    $selectedOrgCat = old('og_cat_id', $skRecord?->og_cat_id);
@endphp

<div class="space-y-4">
    {{-- Tanggal SK --}}
    <div class="mb-4">
        <label for="tgl_sk">Tanggal SK:</label>
        <input type="date" name="tgl_sk" id="tgl_sk" class="input" value="{{ old('tgl_sk', $skRecord?->tgl_sk) }}"
            required>
        @error('tgl_sk')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- No SK --}}
    <div class="mb-4">
        <label for="no_sk">Nomor SK:</label>
        <input type="text" name="no_sk" id="no_sk" class="input" value="{{ old('no_sk', $skRecord?->no_sk) }}"
            required>
        @error('no_sk')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Jumlah ASN --}}
    <div class="mb-4">
        <label for="jml_asn">Jumlah ASN:</label>
        <input type="number" name="jml_asn" id="jml_asn" class="input"
            value="{{ old('jml_asn', $skRecord?->jml_asn) }}" required>
        @error('jml_asn')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- SK Type --}}
    <div class="mb-4">
        <label>Jenis SK:</label>
        <select name="sk_typ_id" x-model="form.sk_type" class="input" required>
            <option value="">-- Pilih --</option>
            @foreach ($skTypes as $type)
                <option value="{{ $type->id }}" {{ $selectedSkType == $type->id ? 'selected' : '' }}>
                    {{ $type->nama }}
                </option>
            @endforeach
        </select>
        @error('sk_typ_id')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- IF Organisasi --}}
    {{-- Org Category --}}
    <div class="mb-4" x-show="form.sk_type == {{ $skTypes->firstWhere('nama', 'Organisasi')->id }}" x-cloak>
        <label>Kategori Organisasi:</label>
        <select name="og_cat_id" x-model="form.org_cat" x-ref="org_cat" class="input">
            <option value="">-- Pilih --</option>
            @foreach ($orgCategs as $cat)
                <option value="{{ $cat->id }}" {{ $selectedOrgCat == $cat->id ? 'selected' : '' }}>
                    {{ $cat->nama }}
                </option>
            @endforeach
        </select>
        @error('og_cat_id')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Org Subcategory --}}
    @foreach ($orgCategs as $cat)
        <div class="mb-4" x-show="form.org_cat == {{ $cat->id }}" x-cloak>
            <label>Sub Kategori Organisasi:</label>
            <select name="og_sct_id" class="input" x-ref="org_subcat">
                <option value="">-- Pilih --</option>
                @foreach ($cat->orgCatOrgSct as $sub)
                    <option value="{{ $sub->id }}"
                        {{ old('og_sct_id', $skRecord?->og_sct_id) == $sub->id ? 'selected' : '' }}>
                        {{ $sub->nama }}
                    </option>
                @endforeach
            </select>
            @error('og_sct_id')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
            @enderror
        </div>
    @endforeach

    {{-- Jabatan --}}
    <div class="mb-4" x-show="form.sk_type == {{ $skTypes->firstWhere('nama', 'Organisasi')->id }}" x-cloak>
        <label>Jabatan:</label>
        <select name="jab_id" class="input" x-ref="jabatan">
            <option value="">-- Pilih --</option>
            @foreach ($jabatans as $jab)
                <option value="{{ $jab->id }}"
                    {{ old('jab_id', $skRecord?->jab_id) == $jab->id ? 'selected' : '' }}>
                    {{ $jab->nama }}
                </option>
            @endforeach
        </select>
        @error('jab_id')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- IF APS --}}
    <div class="mb-4"
        x-show="form.sk_type == {{ $skTypes->firstWhere('nama', 'Atas Permintaan Sendiri (APS)')->id }}" x-cloak>
        {{-- Alasan APS --}}
        <label>Alasan APS:</label>
        <select name="ap_rsn_id" class="input" x-ref="aps_reason">
            <option value="">-- Pilih --</option>
            @foreach ($apsReasons as $rsn)
                <option value="{{ $rsn->id }}"
                    {{ old('ap_rsn_id', $skRecord?->ap_rsn_id) == $rsn->id ? 'selected' : '' }}>
                    {{ $rsn->nama }}
                </option>
            @endforeach
        </select>
        @error('ap_rsn_id')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>
    {{-- Golongan --}}
    <div class="mb-4"
        x-show="form.sk_type == {{ $skTypes->firstWhere('nama', 'Atas Permintaan Sendiri (APS)')->id }}" x-cloak>
        <label>Golongan:</label>
        <select name="gol_id" class="input" x-ref="golongan">
            <option value="">-- Pilih --</option>
            @foreach ($golongans as $gol)
                <option value="{{ $gol->id }}"
                    {{ old('gol_id', $skRecord?->gol_id) == $gol->id ? 'selected' : '' }}>
                    {{ $gol->nama }}
                </option>
            @endforeach
        </select>
        @error('gol_id')
            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Tombol Submit --}}
    <div class="mt-4 flex justify-end gap-3">
        <a href="{{ route('sk-rec.index') }}" type="button"
            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-500 text-white hover:bg-gray-600 focus:outline-hidden focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
            ← Kembali
        </a>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
            {{ $mode === 'edit' ? 'Update' : 'Simpan' }}
        </button>
    </div>
</div>
