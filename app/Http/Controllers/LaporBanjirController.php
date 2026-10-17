<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function create()
    {
        return view('lapor.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi'       => 'required|string|max:255',
            'tinggi_air'   => 'required|numeric|min:0',
            'keterangan'   => 'nullable|string'
        ]);

        return redirect()->route('lapor.konfirmasi')->with([
            'success_message' => 'Laporan kejadian banjir Anda berhasil dikirim dan dicatat!',
            'data_laporan'    => $validated
        ]);
    }

    public function konfirmasi()
    {
        return view('lapor.konfirmasi');
    }

    public function index()
    {
        $laporan_list = [
            [
                'id' => 1,
                'nama_pelapor' => 'Budi Santoso',
                'lokasi' => 'Jl. Raya Dayeuhkolot No. 45, Kecamatan Dayeuhkolot',
                'tinggi_air' => 25, // Waspada (< 30 cm)
                'waktu' => '2026-10-16 08:30',
                'keterangan' => 'Genangan air mulai menutupi sebagian badan jalan utama.'
            ],
            [
                'id' => 2,
                'nama_pelapor' => 'Siti Rahma',
                'lokasi' => 'Kampung Bojongasih RT 03/RW 04, Baleendah',
                'tinggi_air' => 55, // Siaga (30 - 70 cm)
                'waktu' => '2026-10-16 09:15',
                'keterangan' => 'Air meluap dari Sungai Citarum dan masuk ke pemukiman warga.'
            ],
            [
                'id' => 3,
                'nama_pelapor' => 'Ahmad Fauzi',
                'lokasi' => 'Desa Citeureup, Kecamatan Majalaya',
                'tinggi_air' => 90, // Awas (> 70 cm)
                'waktu' => '2026-10-16 10:00',
                'keterangan' => 'Akses jalan terputus total, beberapa rumah terendam sepinggang.'
            ],
            [
                'id' => 4,
                'nama_pelapor' => 'Dewi Lestari',
                'lokasi' => 'Perumahan Rancaekek Kencana, Rancaekek',
                'tinggi_air' => 15, // Waspada (< 30 cm)
                'waktu' => '2026-10-16 11:20',
                'keterangan' => 'Hujan deras menyebabkan genangan di area depan kompleks.'
            ]
        ];

        return view('lapor.index', compact('laporan_list'));
    }
}