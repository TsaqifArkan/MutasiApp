<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
    @php
        // dd($skPer);
    @endphp
    {{-- {{ dd(date("Y-m-01")) }} --}}

    <div class="font-bold text-xl my-5">これはまだプロトタイプです</div>

    <label for="data-limit" class="font-semibold">Tampilkan:</label>
    <select id="data-limit" class="border rounded px-2 py-1 ml-2">
        <option value="5">5 Data</option>
        <option value="20">20 Data</option>
        <option value="all" selected>Semua Data</option>
    </select>

    <div class="container mx-auto p-4">
        <canvas id="myChart"></canvas>
    </div>

    <div class="container mx-auto p-4">
        <canvas id="myChart2"></canvas>
    </div>

    <script>
        const chartData = {
            // labels: {!! json_encode($jmlPerSK->pluck('skDetJab.no_sk')) !!},
            labels: {!! json_encode($skPer->pluck('tahun')) !!},
            data: {!! json_encode($skPer->pluck('jml')) !!}
        };

        const ctx = document.getElementById('myChart');

        function createChart(labels, data) {
            return new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah SK per Tahun',
                        data: data,
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
                            max: Math.max(...data) + 1
                        }
                    }
                }
            });
        }

        const allLabels = chartData.labels;
        const allData = chartData.data;
        let chart = createChart(allLabels, allData);

        const ctx2 = document.getElementById('myChart2');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: {!! json_encode($jmlPerSK->pluck('skDetJab.no_sk')) !!},
                datasets: [{
                    label: 'Jumlah SK per Jenis SK',
                    data: {!! json_encode($jmlPerSK->pluck('tot')) !!},
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
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
                        }
                    }
                }
            }
        });

        document.getElementById('data-limit').addEventListener('change', function() {
            const value = this.value;
            let labels = allLabels;
            let data = allData;

            if (value !== 'all') {
                const limit = parseInt(value);
                labels = allLabels.slice(0, limit);
                data = allData.slice(0, limit);
            }

            chart.destroy(); // hapus chart lama
            chart = createChart(labels, data); // buat ulang chart baru
        });
    </script>

</x-layout>
