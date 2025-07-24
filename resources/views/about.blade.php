<x-guest-layout>
    <style>
        .about-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .section {
            margin-bottom: 60px;
            display: flex;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .section-content {
            flex: 1 1 400px;
        }

        .section-image {
            flex: 1 1 400px;
            max-width: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .section-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .buttons {
            margin-top: 20px;
        }

        .btn-custom {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 24px;
            margin-right: 15px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #388E3C;
        }

        h2 {
            font-weight: 700;
            margin-bottom: 15px;
            color: #2e7d32;
        }

        p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* SDA Cards */
        .sda-cards {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
        }

        .sda-card {
            background-color: #23452f;
            /* changed background to new green */
            color: white;
            /* text color white */
            flex: 1;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sda-card i {
            font-size: 48px;
            margin-bottom: 15px;
            color: #69c141;
        }

        .sda-card h3 {
            margin-bottom: 10px;
            font-weight: 700;
            color: white;
        }

        .sda-card p {
            flex-grow: 1;
            color: white;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .sda-card button {
            background-color: #69c141;
            border: none;
            color: #d3d3d3;
            /* changed to light gray */
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .sda-card button:hover {
            background-color: #42722c;
        }

        @media (max-width: 768px) {
            .sda-cards {
                flex-direction: column;
            }

            .sda-card {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .section {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
                margin: 10px;
            }

            .section-content p,
            .section-content {
                text-align: justify;
            }

            .section-content {
                flex: 1 1 100%;
                text-align: justify !important;
            }

            .section-content h2 {
                text-align: center
            }

            .section-image {
                flex: 1 1 100%;
                max-width: 100%;
                margin-top: 10px;
            }

            .section-image img {
                margin: 0 auto;
                width: 100%;
                height: auto;
                border-radius: 12px;
            }

            .buttons {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .btn-custom {
                width: 100%;
                margin-right: 0;
            }

            .row {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .col-lg-4,
            .col-md-6 {
                width: 100% !important;
                flex: 1 1 100%;
            }

            .service-item {
                flex-direction: column;
                padding: 0 !important;
            }

            .service-img {
                width: 100%;
                margin-bottom: 10px;
            }

            .service-text {
                padding: 20px !important;
            }

            .sda-card {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>

    <div class="about-container">
        <!-- Section 1: Village Profile with buttons -->
        <div class="section">
            <div class="section-content">
                <h2>Tentang Desa</h2>
                <p>Desa Sumber Urip merupakan salah satu desa di Kecamatan Selupu Rejang, Kabupaten Rejang Lebong,
                    Provinsi Bengkulu. Desa ini memiliki luas wilayah 1.077 hektar dengan kontur wilayah yang sebagian
                    besar berupa perbukitan dan lahan pertanian. Jaraknya sekitar 7 km dari pusat kecamatan dan 18 km
                    dari ibu kota kabupaten. Sebagian besar masyarakatnya bermata pencaharian sebagai petani, dan
                    kehidupan sosial desa masih sangat kental dengan nilai-nilai gotong royong dan musyawarah.</p>
                <div class="buttons">
                    <button class="btn-custom">SDA</button>
                    <button class="btn-custom">SDM</button>
                </div>
            </div>
            <div class="section-image">
                <img src="{{ asset('assets/img/beranda1.jpg') }}" alt="Profil Desa">
            </div>
        </div>

        <div class="section">
            <div class="section-image">
                <img src="{{ asset('assets/img/beranda2.jpg') }}" alt="Sumber Daya Manusia">
            </div>
            <div class="section-content" style="text-align: right;">
                <h2>Sumber Daya Manusia (SDM)</h2>
                <p>Jumlah penduduk Desa Sumber Urip mencapai 2.471 jiwa yang terbagi dalam 6 dusun. Mayoritas masyarakat
                    adalah suku Jawa yang telah lama bermukim dan membentuk budaya lokal yang kuat. Dari sisi
                    pendidikan, sebagian besar penduduk berpendidikan hingga tingkat SD dan SMP. Meskipun begitu, desa
                    ini memiliki potensi besar dalam pengembangan SDM melalui pelatihan, pendidikan non-formal, serta
                    penguatan organisasi pemuda dan masyarakat. Kehadiran lembaga seperti Karang Taruna dan kelompok
                    pengajian juga berperan penting dalam pembinaan sosial dan spiritual warga.</p>
            </div>
        </div>

        <!-- Section 2: SDA content with cards and photo 1 -->
        <div class="section">
            <div class="section-content">
                <h2>Sumber Daya Alam (SDA)</h2>
                <p>
                    Desa Sumber Urip memiliki potensi sumber daya alam yang melimpah dan beragam. Wilayahnya yang
                    terdiri dari lahan pertanian subur, kawasan perbukitan, serta hutan konservasi menjadikan desa ini
                    kaya akan kekayaan alam yang dapat dimanfaatkan untuk mendukung kehidupan masyarakat, pertumbuhan
                    ekonomi, dan pengembangan pariwisata berkelanjutan. Potensi ini tersebar di berbagai sektor seperti
                    pertanian, wisata alam, sumber air panas, hingga konservasi lingkungan.
                </p>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('assets/img/icon/icon-3.png') }}"
                                        alt="Icon">
                                </div>
                                <h4 class="mb-3">Pertanian & Perkebunan</h4>
                                <p class="mb-4">Mayoritas lahan desa digunakan untuk pertanian sayur-mayur seperti
                                    kol, cabai, tomat, dan kentang. Sistem pertanian masih banyak yang tradisional namun
                                    sangat potensial untuk dikembangkan secara modern dan berkelanjutan.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="{{ asset('assets/img/service-2.jpg') }}" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('assets/img/icon/icon-6.png') }}"
                                        alt="Icon">
                                </div>
                                <h4 class="mb-3">Taman Wisata Bukit Kaba</h4>
                                <p class="mb-4">Bukit Kaba adalah kawasan perbukitan dan gunung berapi aktif yang
                                    menjadi ikon wisata alam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="{{ asset('assets/img/service-3.jpg') }}" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('assets/img/icon/icon-5.png') }}"
                                        alt="Icon">
                                </div>
                                <h4 class="mb-3">Pemandian Air Panas</h4>
                                <p class="mb-4">Sumber air panas alami yang berada di wilayah desa menjadi tempat
                                    relaksasi dan terapi tradisional bagi warga. Tempat ini memiliki potensi besar untuk
                                    dikembangkan sebagai wisata kesehatan berbasis alam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="{{ asset('assets/img/service-4.jpg') }}" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('assets/img/icon/icon-4.png') }}"
                                        alt="Icon">
                                </div>
                                <h4 class="mb-3">Lahan Perhutanan & Konservasi</h4>
                                <p class="mb-4">Sebagian wilayah desa berada dekat dengan kawasan hutan wisata dan
                                    konservasi, yang mendukung ekosistem alami dan dapat dijadikan tempat edukasi
                                    lingkungan dan penelitian.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="{{ asset('assets/img/service-5.jpg') }}" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('assets/img/icon/icon-8.png') }}"
                                        alt="Icon">
                                </div>
                                <h4 class="mb-3">Akses Air & Drainase</h4>
                                <p class="mb-4">Terdapat sistem irigasi sederhana dan saluran drainase yang menopang
                                    aktivitas pertanian, meskipun masih perlu pengembangan lebih lanjut agar lebih
                                    efisien.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="{{ asset('assets/img/service-6.jpg') }}" alt="">
                            </div>
                            <div class="service-text rounded p-5">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="{{ asset('assets/img/icon/icon-2.png') }}"
                                        alt="Icon">
                                </div>
                                <h4 class="mb-3">Urban Gardening</h4>
                                <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                    diam stet diam sed stet.</p>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="sda-cards">
                    <div class="sda-card">
                        <i class="fas fa-desktop"></i>
                        <h3>Computer Security</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                        <button>Read more</button>
                    </div>
                    <div class="sda-card">
                        <i class="fas fa-folder"></i>
                        <h3>Folder Security</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                        <button>Read more</button>
                    </div>
                    <div class="sda-card">
                        <i class="fas fa-fingerprint"></i>
                        <h3>Finger Print Security</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                        <button>Read more</button>
                    </div>
                </div> --}}
            </div>

        </div>

    </div>
</x-guest-layout>
