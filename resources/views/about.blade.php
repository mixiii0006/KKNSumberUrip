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
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
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
            background-color: #23452f; /* changed background to new green */
            color: white; /* text color white */
            flex: 1;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
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
            color: #d3d3d3; /* changed to light gray */
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
    </style>

    <div class="about-container">
        <!-- Section 1: Village Profile with buttons -->
        <div class="section">
            <div class="section-content">
                <h2>Profil Desa</h2>
                <p>Deskripsi singkat tentang desa, sejarah, dan informasi penting lainnya yang menggambarkan karakter dan keunikan desa.</p>
                <div class="buttons">
                    <button class="btn-custom">SDA</button>
                    <button class="btn-custom">SDM</button>
                </div>
            </div>
            <div class="section-image">
                <img src="{{ asset('assets/img/about-1.jpg') }}" alt="Profil Desa">
            </div>
        </div>

        <div class="section">
            <div class="section-image">
                <img src="{{ asset('assets/img/about-2.jpg') }}" alt="Sumber Daya Manusia">
            </div>
            <div class="section-content" style="text-align: right;">
                <h2>Sumber Daya Manusia (SDM)</h2>
                <p>Penjelasan tentang kualitas sumber daya manusia di desa, pendidikan, pelatihan, dan pengembangan kapasitas masyarakat.</p>
            </div>
        </div>

        <!-- Section 2: SDA content with cards and photo 1 -->
        <div class="section">
            <div class="section-content">
                <h2>Sumber Daya Alam (SDA)</h2>
                <div class="sda-cards">
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
                </div>
            </div>

        </div>

    </div>
</x-guest-layout>
