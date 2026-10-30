<?php

namespace App\Http\Controllers;

class InformasiController extends Controller
{
    public function guru()
    {
        $guru = [
            [
                'nama' => 'Enok Kusmiati, S.Pd.I., M.Pd.',
                'jabatan' => 'Kepala Sekolah'
            ],
            [
                'nama' => 'Asti Atiyah, S.Pd',
                'jabatan' => 'Guru Kelas 10'
            ],
            [
                'nama' => 'Raihan Doan, S.tg',
                'jabatan' => 'Guru Kelas 11'
            ],
            [
                'nama' => 'Dini S.M',
                'jabatan' => 'Guru Mata Pelajaran B.Inggris'
            ]
        ];

        return view('guru', compact('guru'));
    }

    public function kegiatan()
    {
        $kegiatan = [
            1 => [
                'judul' => 'Upacara Bendera',
                'tanggal' => 'Setiap Hari Senin',
                'deskripsi' => 'Kegiatan upacara untuk melatih kedisiplinan dan rasa cinta tanah air.'
            ],
            2 => [
                'judul' => 'Kegiatan Literasi',
                'tanggal' => 'Sesuai Jadwal Sekolah',
                'deskripsi' => 'Kegiatan membaca untuk meningkatkan pengetahuan dan kemampuan literasi siswa.'
            ],
            3 => [
                'judul' => 'Kerja Bakti',
                'tanggal' => 'Sesuai Jadwal Sekolah',
                'deskripsi' => 'Kegiatan membersihkan lingkungan sekolah bersama-sama.'
            ]
        ];

        return view('kegiatan', compact('kegiatan'));
    }

    public function detailKegiatan($id)
    {
        $semuaKegiatan = [
            1 => [
                'judul' => 'Upacara Bendera',
                'tanggal' => 'Setiap Hari Senin',
                'deskripsi' => 'Kegiatan upacara untuk melatih kedisiplinan dan rasa cinta tanah air.'
            ],
            2 => [
                'judul' => 'Kegiatan Literasi',
                'tanggal' => 'Sesuai Jadwal Sekolah',
                'deskripsi' => 'Kegiatan membaca untuk meningkatkan pengetahuan dan kemampuan literasi siswa.'
            ],
            3 => [
                'judul' => 'Kerja Bakti',
                'tanggal' => 'Sesuai Jadwal Sekolah',
                'deskripsi' => 'Kegiatan membersihkan lingkungan sekolah bersama-sama.'
            ]
        ];

        if (!isset($semuaKegiatan[$id])) {
            abort(404);
        }

        $detail = $semuaKegiatan[$id];

        return view('detail-kegiatan', compact('detail'));
    }
}
