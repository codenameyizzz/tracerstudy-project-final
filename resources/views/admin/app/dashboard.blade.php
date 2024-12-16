@extends('admin.layouts.app')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li>Hello, Admin!</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <!-- Chart Section -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Chart 1: Bar Chart -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Perbandingan Pengisian Kuesioner</h5>
                                <canvas id="chartPengisianKuesioner"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Chart 2: Pie Chart -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Mahasiswa Tiap Kategori</h5>
                                <canvas id="chartJumlahMahasiswa"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data for Chart 1: Jumlah Mahasiswa Tiap Kategori (Pie Chart)
        const jumlahMahasiswaData = @json($jumlah_mahasiswa_tiap_kategori);

        const configJumlahMahasiswa = {
            type: 'pie',
            data: {
                labels: jumlahMahasiswaData.labels,
                datasets: [{
                    label: 'Total Responden',
                    backgroundColor: [
                        '#6C5B7B', // Ungu tua
                        '#355C7D', // Biru tua
                        '#C06C84', // Merah muda gelap
                        '#F8B195', // Peach
                        '#F67280', // Merah salmon
                        '#99B898'  // Hijau pudar
                    ],
                    borderColor: '#ffffff', // Border putih agar lebih jelas
                    borderWidth: 2,
                    data: jumlahMahasiswaData.data,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                const total = jumlahMahasiswaData.data.reduce((sum, value) => sum + value, 0);
                                const value = tooltipItem.raw;
                                const percentage = ((value / total) * 100).toFixed(2);
                                return `${jumlahMahasiswaData.labels[tooltipItem.dataIndex]}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        };
        new Chart(document.getElementById('chartJumlahMahasiswa'), configJumlahMahasiswa);

        // Data for Chart 2: Perbandingan Pengisian Kuesioner (Bar Chart)
        const pengisianKuesionerData = @json($perbandingan_pengisian_questioner);

        const configPengisianKuesioner = {
            type: 'bar',
            data: {
                labels: pengisianKuesionerData.labels,
                datasets: [{
                    label: 'Total Responden',
                    backgroundColor: [
                        '#556270', // Abu kebiruan
                        '#4ECDC4', // Hijau teal
                        '#C44D58', // Merah tua
                        '#FF6B6B', // Merah salmon gelap
                        '#2A363B'  // Abu tua
                    ],
                    borderColor: '#333333', // Border abu tua solid
                    borderWidth: 1,
                    data: pengisianKuesionerData.data,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 10 }
                    }
                },
                plugins: {
                    legend: { position: 'top' },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                const total = pengisianKuesionerData.data.reduce((sum, value) => sum + value, 0);
                                const value = tooltipItem.raw;
                                const percentage = ((value / total) * 100).toFixed(2);
                                return `${pengisianKuesionerData.labels[tooltipItem.dataIndex]}: ${value} (${percentage}%)`;
                            },
                        },
                    },
                },
            },
        };

        new Chart(document.getElementById('chartPengisianKuesioner'), configPengisianKuesioner);
    });
</script>

@endsection
