<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organisasi;
use App\Models\Instansi;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $instansis = [
        //     // 1
        //     [
        //         'name' => 'Perangkat Desa',
        //         'description' => 'Perangkat desa merupakan tim inti yang menjalankan fungsi pemerintahan di tingkat desa secara langsung dan dekat dengan masyarakat. Mereka bukan sekadar pelaksana administrasi, tetapi juga motor penggerak pembangunan, pelayanan publik, dan pemberdayaan warga. Dengan peran strategis di berbagai bidang seperti tata usaha, keuangan, dan kemasyarakatan, perangkat desa memastikan setiap program berjalan tepat sasaran dan sesuai kebutuhan warga. Profesionalisme, kedekatan sosial, dan semangat membangun menjadi fondasi utama kinerja mereka dalam mewujudkan desa yang tertib, responsif, dan berdaya saing.',
        //         'photo' => 'instansi_photos/sumberurip.png',
        //     ],
        //     // 2
        //     [
        //         'name' => 'Pokdarwis',
        //         'description' => 'Kelompok Sadar Wisata (Pokdarwis) Bukit Kaba adalah wadah partisipatif masyarakat yang berperan aktif dalam pengelolaan, pelestarian, dan pengembangan potensi wisata alam Bukit Kaba. Dibentuk sebagai mitra strategis pemerintah desa, Pokdarwis Bukit Kaba hadir untuk mendorong tumbuhnya pariwisata yang berkelanjutan dengan mengedepankan kearifan lokal, keindahan alam, serta keramahan warga. Melalui kegiatan edukatif, promosi wisata, dan pemberdayaan ekonomi lokal, Pokdarwis menjadi ujung tombak dalam memperkenalkan pesona Bukit Kaba sekaligus menjaga kelestariannya bagi generasi mendatang.',
        //         'photo' => 'instansi_photos/pokdarwis.png',
        //     ],
        //     // 3
        //     [
        //         'name' => 'Badan Permusyawaratan Desa',
        //         'description' => 'Badan Permusyawaratan Desa (BPD) Sumber Urip merupakan lembaga perwakilan masyarakat desa yang berperan penting dalam mewujudkan pemerintahan desa yang transparan, partisipatif, dan akuntabel. Sebagai mitra kerja kepala desa, BPD berfungsi menampung dan menyalurkan aspirasi warga, menyusun serta menyepakati peraturan desa, serta mengawasi jalannya pemerintahan desa. Dengan komitmen terhadap kemajuan dan kesejahteraan bersama, BPD Sumber Urip hadir sebagai jembatan komunikasi antara masyarakat dan pemerintah desa, memastikan setiap keputusan yang diambil berpihak pada kepentingan rakyat dan kemajuan Desa Sumber Urip secara berkelanjutan.',
        //         'photo' => 'instansi_photos/',
        //     ],
        //     // 4
        //     [
        //         'name' => 'Badan Usaha Milik Desa',
        //         'description' => 'BUMDes Sumber Urip (Badan Usaha Milik Desa Sumber Urip) adalah lembaga ekonomi desa yang dibentuk untuk mengelola potensi dan aset desa secara produktif guna meningkatkan kesejahteraan masyarakat. Sebagai wadah usaha yang dikelola oleh desa dan untuk desa, BUMDes Sumber Urip hadir dengan semangat kemandirian dan inovasi, membuka peluang usaha baru, menciptakan lapangan kerja, serta mendorong pertumbuhan ekonomi lokal. Melalui pengelolaan yang transparan, profesional, dan berorientasi pada kemajuan bersama, BUMDes menjadi ujung tombak dalam mewujudkan desa yang mandiri, produktif, dan berkelanjutan.',
        //         'photo' => 'instansi_photos/',
        //     ],

        //     // // 5
        //     // [
        //     //     'name' => '',
        //     //     'description' => '',
        //     //     'photo' => 'instansi_photos/',
        //     // ],
        // ];

        $organisasis = [
            [
                'instansi_id' => 3,
                'nama' => 'Sri Wahyudi',
                'jabatan' => 'Kepala Desa',
                'photo' => 'organisasi_photos/pd1.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Hartono, SE.',
                'jabatan' => 'Sekretaris Desa',
                'photo' => 'organisasi_photos/pd2.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Yulian Adi Putra',
                'jabatan' => 'KASI Pelayanan',
                'photo' => 'organisasi_photos/pd3.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Tejo Kasiyanto',
                'jabatan' => 'KASI Pemerintah',
                'photo' => 'organisasi_photos/pd4.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Trio Andryatma',
                'jabatan' => 'KAUR TU dan Umum',
                'photo' => 'organisasi_photos/pd5.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Agung Rizki',
                'jabatan' => 'KAUR Perencanaan',
                'photo' => 'organisasi_photos/pd6.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Sigit Widiarto',
                'jabatan' => 'KAUR Keuangan',
                'photo' => 'organisasi_photos/pd7.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Tedi Prawoto',
                'jabatan' => 'Kadus I',
                'photo' => 'organisasi_photos/pd8.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Gunawan M.',
                'jabatan' => 'Kadus II',
                'photo' => 'organisasi_photos/pd9.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Aprladi Enisan',
                'jabatan' => 'Kadus III',
                'photo' => 'organisasi_photos/pd10.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Sugeng Irwanto',
                'jabatan' => 'Kadus IV',
                'photo' => 'organisasi_photos/pd11.png',
            ],
            [
                'instansi_id' => 3,
                'nama' => 'Sadirman',
                'jabatan' => 'Kadus V',
                'photo' => 'organisasi_photos/pd12.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Yulian Adi Pratama',
                'jabatan' => 'Ketua',
                'photo' => 'organisasi_photos/pok1.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Adi Darmansyah',
                'jabatan' => 'Sekretaris',
                'photo' => 'organisasi_photos/pok2.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Setio Hani',
                'jabatan' => 'Bendahara',
                'photo' => 'organisasi_photos/pok3.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Budi Prasetio',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok4.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Solikin',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok5.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Fabrian',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok6.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Johan Arifin',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok7.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Fajar Ahmedi',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok8.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Ihsan Permana',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok9.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Ki Joni',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok10.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Wahyu',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok11.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Aji Priantoro',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok12.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Andrean',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok13.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Noval Kurniawan',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok14.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Teguh Prinanda',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok15.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Rindra Dewa',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok16.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Nading Suharto',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok17.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Rudi',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok18.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Randi Wijaya',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok19.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Muhammad Azam',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok20.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Agil Fiftakul',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok21.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Sugeng Riyanto',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok22.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Dedi Septiono',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok23.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Ahmad Suhaidi',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok24.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Eko Utomo',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok25.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Dimas Yuda',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok26.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Rio Agustian',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok27.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Ramli Ozi',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok28.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Dion',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok29.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Reza Rezita',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok30.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Dwiky Martino',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok31.png',
            ],
            [
                'instansi_id' => 4,
                'nama' => 'Vidi Yuliansyah',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/pok32.png',
            ],
            [
                'instansi_id' => 5,
                'nama' => 'Sukirno',
                'jabatan' => 'Ketua',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 5,
                'nama' => 'Heriyanto',
                'jabatan' => 'Wakil Ketua',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 5,
                'nama' => 'Catur Purnami',
                'jabatan' => 'Sekretaris',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 5,
                'nama' => 'Kumpul Adi Guyub',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 5,
                'nama' => 'Mustam',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 5,
                'nama' => 'Siswanto',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 5,
                'nama' => 'Reka Wulandari',
                'jabatan' => 'Anggota',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Sigit Widianto',
                'jabatan' => 'Direktur',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Rio Agustian',
                'jabatan' => 'Sekretaris',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Umy Nuryana',
                'jabatan' => 'Bendahara',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Sukarno',
                'jabatan' => 'Unit Tenda',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Regina Pangesti',
                'jabatan' => 'Unit PPOB',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Saifudin',
                'jabatan' => 'Unit Air Bersih',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Yulian Adi Pratama',
                'jabatan' => 'Unit Wisata',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Astoyo',
                'jabatan' => 'Unit Bogasi',
                'photo' => 'organisasi_photos/null.png',
            ],
            [
                'instansi_id' => 6,
                'nama' => 'Ludiyoni',
                'jabatan' => 'Unit Alsinta',
                'photo' => 'organisasi_photos/null.png',
            ],

        ];

        // foreach ($instansis as $instansi) {
        //     Instansi::create($instansi);
        // }

        foreach ($organisasis as $organisasi) {
            Organisasi::create($organisasi);
        }
    }
}
