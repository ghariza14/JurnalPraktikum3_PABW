@extends('layouts.app')

@section('title', 'Form Pelaporan Banjir')

@section('content')
    <h2>Form Pelaporan Kejadian Banjir</h2>
    <p style="margin-bottom: 20px; color: #666;">Silakan isi formulir di bawah ini untuk melaporkan kejadian banjir di lokasi Anda.</p>

    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor:</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa/Jalan):</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: Jl. Raya Dayeuhkolot No. 12" required>
        </div>

        <div class="form-group">
            <label for="tinggi_air">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi_air" name="tinggi_air" placeholder="Masukkan angka dalam cm (misal: 45)" min="0" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan / Kondisi Tambahan:</label>
            <textarea id="keterangan" name="keterangan" rows="4" placeholder="Jelaskan kondisi terkini di lapangan..."></textarea>
        </div>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
@endsection