<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>

    <div class="font-bold text-xl my-5">これはまだプロトタイプです</div>

    {{-- <label for="data-limit" class="font-semibold">Tampilkan:</label>
    <select id="data-limit" class="border rounded px-2 py-1 ml-2">
        <option value="5">5 Data</option>
        <option value="20">20 Data</option>
        <option value="all" selected>Semua Data</option>
    </select> --}}

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        {{-- Bar Chart: Jumlah SK per Tahun --}}
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold text-center mb-2">Jumlah SK per Tahun</h3>
            <canvas id="barSkPerTahun"></canvas>
        </div>

        {{-- Bar Chart: Jumlah ASN per Tahun --}}
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold text-center mb-2">Jumlah ASN per Tahun</h3>
            <canvas id="barAsnPerTahun"></canvas>
        </div>

        <!-- Pie Chart: SK per Jenis SK -->
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold text-center mb-2">SK per Jenis SK</h3>
            <canvas id="pieJenisSk"></canvas>
        </div>

        <!-- Pie Chart: SK per APS Reason -->
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold text-center mb-2">SK per APS Reason</h3>
            <canvas id="pieApsReason"></canvas>
        </div>

        <!-- Pie Chart: SK per Org Categ -->
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold text-center mb-2">SK per Org Categ</h3>
            <canvas id="pieOrgCateg"></canvas>
        </div>

        <!-- Bar Chart: SK per Golongan -->
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold text-center mb-2">SK per Golongan</h3>
            <canvas id="barGolongan"></canvas>
        </div>

        <!-- Bar Chart: SK per Jabatan -->
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold text-center mb-2">SK per Jabatan</h3>
            <canvas id="barJabatan"></canvas>
        </div>

    </div>

    <script>
        const chartPie = (ctx, labels, data, labelText) => new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: labelText,
                    data: data,
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#F67019'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                size: 18,
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: labelText,
                        font: {
                            size: 20,
                        }
                    }
                }
            }
        })

        const chartBar = (ctx, labels, data, labelText) => new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: labelText,
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 18,
                            }
                        }
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0,
                            font: {
                                size: 18,
                            }
                        },
                        // max: Math.max(...data) + 5, // Set max to one more than the highest value
                    },
                    x: {
                        display: true,
                        ticks: {
                            autoSkip: false,
                            font: {
                                size: 18,
                            }
                        }
                    }
                }
            }
        });

        // Pie Chart:
        chartPie(document.getElementById('pieJenisSk'), @json($skPerJenis->pluck('label')), @json($skPerJenis->pluck('total')),
            'Jenis SK')
        chartPie(document.getElementById('pieApsReason'), @json($skApsReason->pluck('label')), @json($skApsReason->pluck('total')),
            'APS Reason');
        chartPie(document.getElementById('pieOrgCateg'), @json($skOrgCateg->pluck('label')), @json($skOrgCateg->pluck('total')),
            'Kategori Organisasi');

        // Bar Charts
        chartBar(document.getElementById('barGolongan'), @json($skByGol->pluck('label')), @json($skByGol->pluck('total')),
            'Golongan');
        chartBar(document.getElementById('barJabatan'), @json($skByJab->pluck('label')), @json($skByJab->pluck('total')),
            'Jabatan');
        // Bar Charts (lanjutan)
        chartBar(document.getElementById('barSkPerTahun'), @json($skPerTahun['labels']), @json($skPerTahun['jumlah_sk']),
            'SK Mutasi APS & ORG');
        chartBar(document.getElementById('barAsnPerTahun'), @json($skPerTahun['labels']), @json($skPerTahun['total_asn']),
            'Jumlah ASN per Tahun');
    </script>

</x-layout>
