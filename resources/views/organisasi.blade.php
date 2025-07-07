<x-guest-layout>
    <style>
        .org-container {
            max-width: 1200px;
            margin: 40px auto;
            font-family: Arial, sans-serif;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
        }

        .org-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            width: 100%;
            margin-bottom: 30px;
            box-sizing: border-box;
            flex-wrap: wrap;
        }

        .org-description {
            flex: 1;
            background-color: #f9f9f9;
            border-radius: 12px;
            padding: 30px 40px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            font-size: 1rem;
            color: #333;
            position: relative;
            line-height: 1.5;
        }

        .org-description h2 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .org-description::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 20px;
            width: 12px;
            height: 12px;
            background-color: #4CAF50;
            border-radius: 50%;
        }

        .org-logo {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #2e7d32, #81c784);
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 20px;
            flex-shrink: 0;
            margin-top: 20px;
        }

        .anggota-section {
            width: 100%;
            background-color: #f9f5f0;
            border-radius: 12px;
            padding: 20px 30px;
            box-sizing: border-box;
        }

        .anggota-title {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .member-list {
            /* Remove grid layout to allow carousel */
            display: block;
        }

        .member-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
            text-align: left;
            padding: 15px;
            font-size: 0.9rem;
            transition: transform 0.3s ease;
            width: 160px;
            margin: 10px 15px;
            display: inline-block;
            vertical-align: top;
        }

        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.2);
        }

        .member-photo {
            width: 100%;
            height: 110px;
            border-radius: 15px;
            object-fit: cover;
            background-color: #ccc;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .member-name {
            font-weight: 700;
            color: #222;
            margin-bottom: 6px;
        }

        .member-desc {
            color: #555;
            font-size: 0.85rem;
            line-height: 1.2;
        }

        @media (max-width: 600px) {
            .org-top {
                flex-direction: column;
            }

            .org-logo {
                margin-left: 0;
                margin-top: 20px;
                align-self: center;
            }
        }
    </style>

    <div class="org-container">
        <div class="org-top">
            <div class="org-description">
                <h2>POKDARWIS</h2>
                <p>took a galley of typndustry. Lorem Ipsum has mmy text ever since the 1500s, when an unknown printer took a galley of type and the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="org-logo">
                LOGO
            </div>
        </div>

        <div class="anggota-section">
            <div class="anggota-title">Anggota</div>
        <div class="member-list owl-carousel owl-theme">
            @for ($i = 1; $i <= 10; $i++)
                <div class="item member-card">
                    <div class="member-photo"></div>
                    <div class="member-name">Member {{ $i }}</div>
                    <div class="member-desc">
                        Role: Member<br>
                        Joined: {{ 2017 + $i }}
                    </div>
                </div>
            @endfor
        </div>
        <script>
            $(document).ready(function(){
                $(".member-list").owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 10,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 1000,
                    autoplayHoverPause: false,
                    smartSpeed: 1000,
                    slideTransition: 'linear',
                    responsive: {
                        0: { items: 1 },
                        600: { items: 5 },
                        1000: { items: 6 }
                    }
                });
            });
        </script>
        </div>
    </div>
</x-guest-layout>
