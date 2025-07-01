<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    @php
        // dd($skPer);
    @endphp
    {{-- {{ dd(date("Y-m-01")) }} --}}

    <div class="font-bold text-xl my-5">これはまだプロトタイプです</div>

    {{-- <label for="data-limit" class="font-semibold">Tampilkan:</label>
    <select id="data-limit" class="border rounded px-2 py-1 ml-2">
        <option value="5">5 Data</option>
        <option value="20">20 Data</option>
        <option value="all" selected>Semua Data</option>
    </select> --}}

    <div class="container px-4 py-4">
        <div class="container mx-auto p-4">
            <canvas id="jmlSkThn"></canvas>
        </div>

        <div class="container mx-auto p-4">
            <canvas id="jmlAsnThn"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('jmlSkThn').getContext('2d');
        const ctx2 = document.getElementById('jmlAsnThn').getContext('2d');
        const labels = @json($skPer->pluck('tahun'));
        const jmlSK = @json($skPer->pluck('jml'));
        const totASN = @json($skPer->pluck('tot_asn'));

        const jmlSkThn = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah SK',
                    data: jmlSK,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        },
                        text: 'Jumlah',
                        max: Math.max(...jmlSK) + 5
                    },
                    x: {
                        display: true,
                        text: 'Tahun SK',
                    }
                }
            }
        });

        const jmlAsnThn = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah ASN',
                    data: totASN,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        },
                        text: 'Jumlah',
                        // max: Math.max(...data) + 1
                    },
                    x: {
                        display: true,
                        text: 'Tahun SK',
                    }
                }
            }
        });
    </script>

</x-layout>
