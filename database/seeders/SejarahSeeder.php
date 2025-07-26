<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sejarah;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sejarahs = [
            [
                'tahun' => '1917',
                'deskripsi' => 'Adanya kedatangan orang Belanda yang pertama kali membuka hutan belantara yang diberi nama Ondernaming Bukit Kaba',
            ],
            [
                'tahun' => '1953',
                'deskripsi' => 'Belanda membagi wilayah Onderneming menjadi 4 wilayah yaitu Sambirejo, Sumber Bening, Batang Gelang, Mojorejo.',
            ],
            [
                'tahun' => '1958',
                'deskripsi' => 'Terjadi perubahan nama dari Batang Gelang berubah menjadi Sumber Urip.',
            ],
            [
                'tahun' => '1968',
                'deskripsi' => 'Dibangunnya SD Negeri No. 34 di sumber URip yang memiliki guru 4 orang.',
            ],
            [
                'tahun' => '1982',
                'deskripsi' => 'Terjadi pemekaran desa Sumber Urip yang kemudian diberinama Desa Karang Jaya.',
            ],
            [
                'tahun' => '1983',
                'deskripsi' => 'Dibangunnya Puskesmas pembantu yang kemudian berubah menjadi Puskesmas Induk dan dibangunnya Balai Desa.',
            ],
            [
                'tahun' => '1984',
                'deskripsi' => 'Sumber Urip memenangkan Lomba desa tingkat Propinsi dan berhak mewakili Propinsi Bengkulu mengikuti upacara HUT RI di Jakarta',
            ],
            [
                'tahun' => '2001',
                'deskripsi' => 'Turunnya beras raskin dari Pemerintah.',
            ],
            [
                'tahun' => '2009',
                'deskripsi' => 'Renovasi Balai Desa Sumber Urip.',
            ],
            [
                'tahun' => '2010',
                'deskripsi' => 'Di bangunnya sarana jalan usuaha tani di dusun 6',
            ],
            [
                'tahun' => '2012',
                'deskripsi' => 'Pembangunan jalan hotmik di dusun 6 mendapatkan pembangunan SAB untuk dusun 5 dan 6.',
            ],
            [
                'tahun' => '2013',
                'deskripsi' => 'masuknya listrik di dusun 5 dan dusun 6',
            ],
            [
                'tahun' => '2014',
                'deskripsi' => 'Desa Sumber Urip meraih prestasi sebagai juara 1 lomba desa tingkat kabupaten. Selain itu, desa ini juga mengalami perkembangan infrastruktur yang signifikan, seperti pembangunan jalan gang atau rabat beton sepanjang 987 meter yang didanai oleh PNPM-MPd pada tahun anggaran 2014, serta pembangunan jalan gang dengan permukaan hotmix.',
            ],
            [
                'tahun' => '2015',
                'deskripsi' => 'Masuknya dana desa yang pertama dimanfaatkan untuk pembangunan jalan rabat beton, sedangkan sebagian lainnya digunakan untuk penambahan alat tarup.',
            ],
            [
                'tahun' => '2016',
                'deskripsi' => 'Pada periode ini, Desa Sumber Urip mencatat beberapa pencapaian penting, di antaranya terpilihnya kembali Bapak Yadi Sutanto sebagai Kepala Desa, dimulainya pembangunan Jalan Usaha Tani berupa jalan Lapen, serta pemanfaatan Dana Desa untuk pembangunan jalan rabat beton di gang permukiman.',
            ],
        ];

        foreach ($sejarahs as $sejarah) {
            Sejarah::create($sejarah);
        }
    }
}
