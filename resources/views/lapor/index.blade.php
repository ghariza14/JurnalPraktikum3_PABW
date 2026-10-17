@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Daftar Kejadian Banjir Terkini</h2>
        <a href="{{ route('lapor.form') }}" class="btn">+ Tambah Laporan</a>
    </div>

    {{-- Komponen Alert Info --}}
    <x-alert type="info" message="Data di bawah merupakan laporan masyarakat terkait titik banjir aktif di wilayah Kabupaten Bandung." />

    {{-- Perulangan @forelse dengan pemanggilan Partial @include --}}
    @forelse($laporan_list as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p style="text-align: center; color: #888; padding: 20px;">Belum ada laporan kejadian banjir yang tercatat.</p>
    @endforelse
@endsection