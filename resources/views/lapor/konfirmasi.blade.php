@extends('layouts.app')

@section('title', 'Konfirmasi Pelaporan')

@section('content')
    <h2>Konfirmasi Pelaporan Banjir</h2>
    <br>

    {{-- Penggunaan Komponen Alert <x-alert> --}}
    @if(session('success_message'))
        <x-alert type="success" :message="session('success_message')" />
    @else
        <x-alert type="info" message="Laporan Anda telah berhasil diterima oleh sistem BPBD Kabupaten Bandung." />
    @endif

    <div style="background-color: #f8f9fa; border: 1px solid #e9ecef; padding: 20px; border-radius: 6px; margin-top: 15px;">
        <h3 style="margin-bottom: 15px; color: #004085;">Rincian Data Laporan</h3>

        @if(session('data_laporan'))
            @php $data = session('data_laporan'); @endphp
            <p><strong>Nama Pelapor:</strong> {{ $data['nama_pelapor'] }}</p>
            <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>
            <p><strong>Tinggi Genangan Air:</strong> {{ $data['tinggi_air'] }} cm</p>
            <p><strong>Keterangan:</strong> {{ $data['keterangan'] ?? '-' }}</p>
        @else
            <p><strong>Nama Pelapor:</strong> Ahmad Hidayat (Contoh)</p>
            <p><strong>Lokasi Kejadian:</strong> Kecamatan Dayeuhkolot</p>
            <p><strong>Tinggi Genangan Air:</strong> 50 cm</p>
            <p><strong>Status Genangan:</strong> <span class="badge bg-siaga">Siaga</span></p>
        @endif
    </div>

    <div style="margin-top: 25px;">
        <a href="{{ route('lapor.index') }}" class="btn">Lihat Semua Daftar Laporan</a>
        <a href="{{ route('lapor.form') }}" class="btn" style="background-color: #6c757d; margin-left: 10px;">Buat Laporan Baru</a>
    </div>
@endsection