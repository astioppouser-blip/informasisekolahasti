<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $sekolah = [
            'nama' => 'SDN Puspamukti',
            'alamat' => 'Kp. Ngenol, Desa Puspamukti, Kecamatan Cigalontang, Kabupaten Tasikmalaya',
            'kepala' => 'Enok Kusmiati, S.Pd.I., M.Pd.'
        ];

        return view('beranda', compact('sekolah'));
    }

    public function profil()
    {
        $profil = [
            'nama' => 'SDN Puspamukti',
            'sejarah' => 'SDN Puspamukti merupakan sekolah dasar yang menyelenggarakan pendidikan untuk mengembangkan pengetahuan, keterampilan, dan karakter peserta didik.',
            'visi' => 'Mewujudkan peserta didik yang beriman, berkarakter, berprestasi, mandiri, dan peduli lingkungan.',
            'misi' => [
                'Meningkatkan kualitas pembelajaran.',
                'Menanamkan sikap disiplin dan tanggung jawab.',
                'Mengembangkan bakat dan minat peserta didik.',
                'Menjaga kebersihan lingkungan sekolah.'
            ]
        ];

        return view('profil', compact('profil'));
    }
}
