@extends('layouts.master')
@section('title', 'Dashboard Utama')

@section('content')
    <div class="page-heading mb-4">
        <h3 class="mb-1">Dashboard TEFA</h3>
        <p class="text-muted mb-0">Ringkasan data produk, stok, dan event.</p>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 44px; height: 44px; background: #e8f1ff; color: #2f6fe4;">
                        <i class="ti ti-package"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Banyak Produk</h6>
                        <h4 class="mb-0">{{ $totalProduk }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 44px; height: 44px; background: #e6f9f0; color: #18a86b;">
                        <i class="ti ti-category"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Kategori</h6>
                        <h4 class="mb-0">{{ $totalKategori }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 44px; height: 44px; background: #fff3e6; color: #e5862f;">
                        <i class="ti ti-alert-triangle"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Stok Perlu Ditambah</h6>
                        <h4 class="mb-0">{{ $stokPerluDitambah->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 44px; height: 44px; background: #ffe9ec; color: #d7385e;">
                        <i class="ti ti-calendar-event"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Event Terbaru</h6>
                        <h4 class="mb-0">{{ $eventTerbaru->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">Sebaran Produk per Kategori</h5>

                    <div style="height: 280px;">
                        <canvas id="chartKategori"></canvas>
                    </div>

                    <table class="table table-sm mt-4 mb-0">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th class="text-end">Jumlah Produk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produkPerKategori as $kategori)
                                <tr>
                                    <td>{{ $kategori->Nama }}</td>
                                    <td class="text-end fw-bold text-primary">{{ $kategori->total }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center text-muted">Belum ada data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">List Produk yang Stok-nya Perlu Ditambah</h5>
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Bahan</th>
                                    <th>Satuan</th>
                                    <th class="text-end">Stok Sekarang</th>
                                    <th class="text-end">Stok Minimum</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($stokPerluDitambah as $stok)
                                    <tr>
                                        <td>{{ $stok->bahan->Nama ?? '-' }}</td>
                                        <td>{{ $stok->bahan->Satuan ?? '-' }}</td>
                                        <td class="text-end text-danger fw-bold">{{ $stok->Stoknow }}</td>
                                        <td class="text-end">{{ $stok->Stokmin }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Semua stok aman.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">2 Event Terbaru</h5>
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Nama Event</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Penanggung Jawab</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($eventTerbaru as $event)
                                    <tr>
                                        <td class="fw-semibold">{{ $event->Nama }}</td>
                                        <td>{{ \Carbon\Carbon::parse($event->tglmulai)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($event->tglselesai)->format('d/m/Y') }}</td>
                                        <td>{{ $event->user->Nama ?? ($event->user->Email ?? '-') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Belum ada event.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const labels = @json($produkPerKategori->pluck('Nama'));
            const values = @json($produkPerKategori->pluck('total'));

            new Chart(document.getElementById('chartKategori'), {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Produk',
                        data: values,
                        backgroundColor: '#2f6fe4',
                        borderRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
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
        });
    </script>
@endsection
