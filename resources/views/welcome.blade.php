<x-guest-layout>
    @include('welcome-modals')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/beranda2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Selamat Datang di Desa
                                        Wisata
                                        Sumber Urip</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/beranda1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Mulai Perjalanan Wisata
                                        Mu
                                        Disini</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-globe text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Wilayah</h4>
                                <span>Terbagi menjadi 5 dusun</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Penduduk</h4>
                                <span>2471 jiwa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-home text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Balai Desa</h4>
                                <span>Terdapat di dusun IV</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{ asset('assets/img/beranda7.jpg') }}">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-1 text-primary mb-0">25</h1>
                    <h1 class="display-5 mb-4">Sumber Urip</h1>
                    <p class="mb-4">Desa Sumber Urip terletak di Kecamatan Selupu Rejang, Kabupaten Rejang Lebong,
                        Provinsi Bengkulu, dengan luas wilayah sekitar 1.077 hektar.
                        Jaraknya sekitar 7 km dari ibu kota kecamatan dan 18 km dari ibu kota kabupaten. Desa ini
                        didominasi oleh lahan perkebunan dan memiliki suasana pedesaan yang asri dan alami.</p>
                    <a class="btn btn-primary py-3 px-4" href="">Explore More</a>
                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Award Winning</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Dedicated Team</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Garden Complated</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-4">Budaya Desa Sumber Urip</h1>
                    <p class="mb-4">Budaya masyarakat Desa Sumber Urip sangat kental dengan tradisi Jawa yang telah
                        mengakar sejak lama.
                        Nilai-nilai gotong royong, musyawarah mufakat, dan kebersamaan menjadi ciri khas dalam kehidupan
                        sehari-hari.
                        Warga aktif dalam kegiatan sosial budaya seperti pengajian, arisan, kelompok zikir, dan kesenian
                        tradisional.
                        Generasi muda juga dilibatkan melalui organisasi seperti Karang Taruna dan Risma dalam
                        pelestarian budaya desa.</p>
                </div>
                <div class="col-lg-12">
                    <div class="row g-4>
                        <div class="row g-4">
                        <div x-data="{ show: false }" class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <!-- Kotak (trigger modal) -->
                            <div data-bs-toggle="modal" data-bs-target="#modalSedekahBumi"
                                class="cursor-pointer text-center rounded py-5 px-4"
                                style="box-shadow: 0 0 45px rgba(0,0,0,.08); width: 100%;">
                                <img src="{{ asset('assets/img/beranda2.jpg') }}" alt="Sedekah Bumi"
                                    class="mb-3 img-fluid rounded">
                                <h4 class="mb-0">Sedekah Bumi</h4>
                                <p>
                                    Sedekah Bumi merupakan tradisi tahunan sebagai ungkapan syukur kepada Tuhan atas.....
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalSedekahBumi">Selengkapnya</a>
                                </p>
                            </div>

                            <!-- Modal Bootstrap -->
                            <div class="modal fade" id="modalSedekahBumi" tabindex="-1"
                                aria-labelledby="modalSedekahBumiLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalSedekahBumiLabel">Sedekah Bumi
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('assets/img/beranda2.jpg') }}" alt="Sedekah Bumi"
                                                class="img-fluid rounded mb-4"
                                                style="max-height: 300px; object-fit: contain;">
                                            <p>Sedekah Bumi merupakan tradisi tahunan sebagai ungkapan syukur kepada
                                                Tuhan atas hasil panen dan rezeki. Kegiatan ini diisi dengan doa
                                                bersama, kenduri, dan pertunjukan kesenian seperti kuda kepang dan
                                                rebana yang diikuti oleh seluruh warga desa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ show: false }" class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <!-- Kotak (trigger modal) -->
                            <div data-bs-toggle="modal" data-bs-target="#modalKudaKepang"
                                class="cursor-pointer text-center rounded py-5 px-4"
                                style="box-shadow: 0 0 45px rgba(0,0,0,.08); width: 100%;">
                                <img src="{{ asset('assets/img/beranda2.jpg') }}" alt="Kuda Kepang"
                                    class="mb-3 img-fluid rounded">
                                <h4 class="mb-0">Kuda Kepang</h4>
                                <p>Kuda kepang adalah tarian tradisional khas Jawa yang dimainkan oleh pemuda desa
                                    dengan iringan gamelan.....
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalKudaKepang">Selengkapnya</a>
                                </p>
                            </div>

                            <!-- Modal Bootstrap -->
                            <div class="modal fade" id="modalKudaKepang" tabindex="-1"
                                aria-labelledby="modalKudaKepangLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalKudaKepangLabel">Kuda Kepang
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('assets/img/beranda2.jpg') }}" alt="Kuda Kepang"
                                                class="img-fluid rounded mb-4"
                                                style="max-height: 300px; object-fit: contain;">
                                            <p>Kuda kepang adalah tarian tradisional khas Jawa yang dimainkan oleh
                                                pemuda desa dengan iringan gamelan. Dalam pertunjukan ini, para
                                                penari menampilkan atraksi dengan properti kuda dari anyaman bambu,
                                                menciptakan suasana magis yang sarat nilai spiritual dan hiburan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Wisata Desa Sumber Urip</h1>
            </div>
            <div class="row g-4">
                <!-- Kotak 1: Bukit Kaba -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('assets/img/beranda1.jpg') }}" alt="Bukit Kaba">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('assets/img/icon/icon-3.png') }}"
                                    alt="Icon">
                            </div>
                            <h4 class="mb-3">Bukit Kaba</h4>
                            <p class="mb-4">Bukit Kaba, yang juga dikenal sebagai Gunung Kaba, adalah gunung berapi aktif yang berada di
                            kawasan Rejang Lebong, Bengkulu, dan menjadi salah satu ikon wisata alam di sekitar Desa
                            Sumber Urip.</p>
                            <a class="btn btn-sm" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalBukitKaba">
                                <i class="fa fa-plus text-primary me-2"></i>Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kotak 2: Pemandian Air Panas -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('assets/img/service-2.jpg') }}"
                                alt="Pemandian Air Panas">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('assets/img/icon/icon-6.png') }}"
                                    alt="Icon">
                            </div>
                            <h4 class="mb-3">Pemandian Air Panas</h4>
                            <p class="mb-4">Pemandian Air Panas di Desa Sumber Urip merupakan salah satu potensi wisata alam yang masih alami dan belum banyak terjamah.</p>
                            <a class="btn btn-sm" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalAirPanas">
                                <i class="fa fa-plus text-primary me-2"></i>Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Bukit Kaba -->
        <div class="modal fade" id="modalBukitKaba" tabindex="-1" aria-labelledby="modalBukitKabaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalBukitKabaLabel">Bukit Kaba</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('assets/img/beranda1.jpg') }}" alt="Bukit Kaba"
                            class="img-fluid rounded mb-4" style="max-height: 300px; object-fit: contain;">
                        <p>
                            Bukit Kaba, yang juga dikenal sebagai Gunung Kaba, adalah gunung berapi aktif yang berada di
                            kawasan Rejang Lebong, Bengkulu, dan menjadi salah satu ikon wisata alam di sekitar Desa
                            Sumber Urip. Gunung ini memiliki ketinggian sekitar 1.952 meter di atas permukaan laut dan
                            terkenal karena akses pendakiannya yang relatif mudah serta pemandangan alam yang
                            menakjubkan.

                            Daya tarik utama Bukit Kaba adalah kawah kembarnya, yaitu kawah aktif dan kawah mati yang
                            bisa dilihat dari puncak. Untuk mencapai puncaknya, pengunjung bisa melalui jalur populer
                            Tangga Seribu, yaitu anak tangga beton berjumlah lebih dari 300 yang menanjak dan langsung
                            menuju ke atas bukit. Meskipun hanya ratusan anak tangga (bukan seribu secara literal),
                            jalur ini menjadi simbol perjuangan pendakian Bukit Kaba.

                            Selain itu, di kawasan ini terdapat beberapa bukit atau titik pandang alam yang sering
                            disebut oleh masyarakat dan pendaki lokal:

                            Puncak Sejati: Titik tertinggi untuk menikmati panorama kawah Bukit Kaba dari sudut yang
                            lebih luas, sangat cocok untuk sunrise atau sunset.

                            Gunung Gajah: Bukit di sekitar kawasan Kaba yang bentuknya menyerupai punggung gajah dari
                            kejauhan, kerap dijadikan jalur alternatif untuk trekking ringan.

                            Kaah: Sebuah area padang atau lapangan terbuka yang biasa dijadikan lokasi istirahat pendaki
                            atau area perkemahan, dengan latar belakang kabut dan pepohonan yang eksotis.

                            Bukit-bukit lain di sekitarnya juga sering dimanfaatkan sebagai lokasi fotografi alam,
                            pengamatan satwa liar, dan edukasi lingkungan oleh sekolah atau komunitas pencinta alam.

                            Dengan lanskap pegunungan, hutan, dan udara sejuk, kawasan Bukit Kaba sangat cocok untuk
                            wisata petualangan, camping, pendakian pemula, hingga wisata edukasi berbasis ekologi.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Pemandian Air Panas -->
        <div class="modal fade" id="modalAirPanas" tabindex="-1" aria-labelledby="modalAirPanasLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAirPanasLabel">Pemandian Air Panas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('assets/img/service-2.jpg') }}" alt="Pemandian Air Panas"
                            class="img-fluid rounded mb-4" style="max-height: 300px; object-fit: contain;">
                        <p>
                            Pemandian Air Panas di Desa Sumber Urip merupakan salah satu potensi wisata alam yang masih alami dan belum banyak terjamah. Terletak tidak jauh dari kawasan Bukit Kaba, lokasi ini menjadi tempat favorit masyarakat sekitar untuk mandi dan relaksasi, terutama di pagi atau sore hari. Air panas yang muncul berasal dari sumber alami geotermal kaki bukit, dan dipercaya memiliki manfaat untuk kesehatan seperti meredakan pegal, melancarkan peredaran darah, dan terapi ringan bagi penderita rematik.

Meskipun fasilitasnya masih sederhana, daya tariknya terletak pada suasana tenang, dikelilingi alam terbuka, serta uap panas alami yang menyegarkan. Kawasan ini sangat berpotensi untuk dikembangkan menjadi wisata pemandian keluarga atau terapi kesehatan dengan konsep alami. Dengan penataan yang tepat, pemandian air panas ini dapat menjadi pelengkap destinasi ekowisata Bukit Kaba yang berada dalam satu jalur kawasan wisata alam Desa Sumber Urip.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Service End -->


    <!-- Articles Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fs-5 fw-bold text-primary">Artikel Terbaru</p>
                <h1 class="display-5 mb-5">Berita dan Informasi Desa</h1>
                @if (Auth::check() && Auth::user()->is_admin)
                    <div class="mb-4 text-end">
                        <a href="{{ route('artikels.create') }}" class="btn btn-success">Tambah Artikel</a>
                    </div>
                @endif
            </div>
            @include('artikels.css')
            <div class="row g-4 align-items-start">
                @foreach ($artikels as $artikel)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ route('artikels.show', $artikel->slug) }}"
                            class="text-decoration-none text-dark">
                            <div
                                class="artikel-container position-relative border rounded p-4 shadow-sm h-100 d-flex flex-column">
                                @if ($artikel->gambar)
                                    <img src="{{ asset('storage/' . $artikel->gambar) }}"
                                        alt="{{ $artikel->judul }}" class="mb-3 img-fluid rounded">
                                @endif
                                <h3 class="artikel-title mb-2">
                                    {{ $artikel->judul }}
                                </h3>
                                <p class="artikel-meta text-muted mb-3">Penulis: {{ $artikel->penulis ?? 'Admin' }} |
                                    {{ $artikel->tanggal_publish->format('d M Y') }}</p>
                                <div class="artikel-excerpt flex-grow-1 mb-3">{!! Str::limit(strip_tags($artikel->isi), 100) !!}</div>
                                @if (Auth::check() && Auth::user()->is_admin)
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('artikels.edit', $artikel->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus artikel ini?');"
                                            class="m-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('artikels.index') }}" class="btn btn-primary">See More</a>
            </div>
        </div>
    </div>
    <!-- Articles End -->

    <!-- Leaflet Map Start -->
    <div class="container-fluid my-5 py-5">
        <div class="container py-5">
            <h1 class="display-5 text-center mb-4">Peta Desa Sumber Urip</h1>
            <div id="map" style="height: 500px; width: 100%;" class="wow fadeIn" data-wow-delay="0.5s"></div>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([-3.477, 102.648], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            // Define polygon coordinates for custom colored mapped areas (example polygons)
            var polygons = [{
                    coords: [
                        [-3.430, 102.630],
                        [-3.460, 102.640],
                        [-3.470, 102.660],
                        [-3.480, 102.670],
                        [-3.490, 102.660],
                        [-3.500, 102.650],
                        [-3.495, 102.640],
                        [-3.490, 102.630],
                        [-3.485, 102.620],
                        [-3.480, 102.610],
                        [-3.470, 102.600],
                        [-3.460, 102.605],
                        [-3.450, 102.610]
                    ],
                    color: '#ff7800',
                    fillColor: '#ff7800',
                    fillOpacity: 0.5
                }
                // Add more polygons as needed
            ];

            polygons.forEach(function(polygon) {
                L.polygon(polygon.coords, {
                    color: polygon.color,
                    fillColor: polygon.fillColor,
                    fillOpacity: polygon.fillOpacity
                }).addTo(map);
            });
        });
    </script>

</x-guest-layout>
