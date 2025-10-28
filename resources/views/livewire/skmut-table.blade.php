<div>
    <div class="flex justify-between items-center mb-4">
        <input type="text" wire:model.debounce.300ms="search" placeholder="Cari Jenis SK ..."
            class="input input-bordered w-full max-w-xs" />
    </div>

    <div class="overflow-x-auto">
        <table class="table table-zebra w-full">
            <thead>
                <tr>
                    <th wire:click="sortBy('full_no_sk')" class="cursor-pointer">Nomor SK Lengkap</th>
                    <th wire:click="sortBy('tgl_sk')" class="cursor-pointer">Tanggal SK</th>
                    <th wire:click="sortBy('ttg_sk')" class="cursor-pointer">Tentang SK</th>
                    <th>File SK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skmuts as $s)
                    <tr>
                        <td>{{ $s->full_no_sk }}</td>
                        <td>{{ $s->tgl_sk }}</td>
                        <td>{{ $s->ttg_sk }}</td>
                        <td><a href="{{ asset('/sk/FileSK/' . $s->file_sk) }}" target="_blank"
                                class="btn btn-info">Lihat
                                File</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $skmuts->links() }}
    </div>
</div>
