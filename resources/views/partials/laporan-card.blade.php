<div class="card" style="border-left-color: {{ $laporan['tinggi_air'] < 30 ? '#28a745' : ($laporan['tinggi_air'] <= 70 ? '#fd7e14' : '#dc3545') }};">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
        <h3 style="color: #004085;">{{ $laporan['lokasi'] }}</h3>
        
        {{-- Penentuan Status Genangan Menggunakan @if / @elseif / @else --}}
        @if($laporan['tinggi_air'] < 30)
            <span class="badge bg-waspada">Waspada (< 30 cm)</span>
        @elseif($laporan['tinggi_air'] >= 30 && $laporan['tinggi_air'] <= 70)
            <span class="badge bg-siaga">Siaga (30 - 70 cm)</span>
        @else
            <span class="badge bg-awas">Awas (> 70 cm)</span>
        @endif
    </div>

    <p><strong>Nama Pelapor:</strong> {{ $laporan['nama_pelapor'] }}</p>
    <p><strong>Tinggi Genangan Air:</strong> {{ $laporan['tinggi_air'] }} cm</p>
    @if(isset($laporan['waktu']))
        <p><strong>Waktu Laporan:</strong> {{ $laporan['waktu'] }}</p>
    @endif
    @if(!empty($laporan['keterangan']))
        <p style="margin-top: 8px; color: #555;"><strong>Keterangan:</strong> {{ $laporan['keterangan'] }}</p>
    @endif
</div>