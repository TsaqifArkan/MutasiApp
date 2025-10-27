<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    <div class="max-w-xl mx-auto mt-10">
        <div class="card bg-base-100 shadow-xl p-6">
            <h2 class="text-xl font-semibold mb-4">Upload Data SK dari Excel</h2>

            @if (session('success'))
                <div class="alert alert-success mb-4">{{ session('success') }}</div>
            @endif

            <form action="{{ route('recap-skmut.uploadStore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="file" name="file" class="file-input file-input-bordered w-full mb-4"
                    accept=".xlsx,.xls,.csv" required>

                <button type="submit" class="btn btn-primary w-full">Import Data</button>
            </form>
        </div>
    </div>
</x-layout>
