<x-layout>
    <x-slot:titles>{{ $title }}</x-slot>
        {{-- {{ dd(date("Y-m-01")) }} --}}

        <div class="font-bold text-xl my-5">これはまだプロトタイプです</div>
        <div>
            <table class="border-2 border-spacing-2 border-separate">
                <thead>
                    <tr>
                        <th class="border border-gray-300 dark:border-gray-600">No</th>
                        <th class="border border-gray-300 dark:border-gray-600">Periode</th>
                        <th>No SK</th>
                        <th>Tgl SK</th>
                        <th>Jenis SK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>September 2023</td>
                        <td>KP123812/213</td>
                        <td>12 September 2023</td>
                        <td>Organisasi</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Desember 2023</td>
                        <td>SFP192331/211</td>
                        <td>9 Desember 2023</td>
                        <td>APS Reguler</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            {{-- <canvas id="myChart"></canvas> --}}
        </div>

        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

</x-layout>