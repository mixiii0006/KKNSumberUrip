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

        .org-logo-container {
            display: flex;
            align-items: center;
            margin-left: 20px;
            flex-shrink: 0;
            margin-top: 20px;
            position: relative;
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
            user-select: none;
        }

        .org-nav-button {
            font-size: 2rem;
            color: #4CAF50;
            cursor: pointer;
            user-select: none;
            padding: 0 10px;
            margin: 0 10px;
            transition: color 0.3s ease;
            user-select: none;
        }

        .org-nav-button:hover {
            color: #388E3C;
        }

        .anggota-section {
            width: 100%;
            background-color: #f9f5f0;
            border-radius: 12px;
            padding: 20px 30px;
            box-sizing: border-box;
            position: relative;
        }

        .anggota-title {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .member-list {
            display: block;
        }

        .member-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 13px rgba(0,0,0,0.15);
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
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
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

        .owl-nav-prev, .owl-nav-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: #4CAF50;
            cursor: pointer;
            user-select: none;
            padding: 0 10px;
            z-index: 1000;
        }
        .owl-nav-prev {
            left: -20px;
        }
        .owl-nav-next {
            right: -30px;
        }
        .owl-nav-prev:hover, .owl-nav-next:hover {
            color: #388E3C;
        }

        .org-wrapper {
            width: 100%;
        }

        .org-wrapper:not(.active) {
            display: none;
        }

        @media (max-width: 600px) {
            .org-top {
                flex-direction: column;
            }

            .org-logo-container {
                margin-left: 0;
                margin-top: 20px;
                align-self: center;
            }
        }
    </style>

    <div class="org-container">
        <div class="org-wrapper active" data-org-index="0">
            <div class="org-top">
                <div class="org-description">
                    <h2>POKDARWIS</h2>
                    <p>took a galley of typndustry. Lorem Ipsum has mmy text ever since the 1500s, when an unknown printer took a galley of type and the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="org-logo-container">
                    <span class="org-nav-button" id="org-prev">&#10094;</span>
                    <div class="org-logo">LOGO 1</div>
                    <span class="org-nav-button" id="org-next">&#10095;</span>
                </div>
            </div>

            <div class="anggota-section">
                <div class="anggota-title">Anggota</div>
                <div class="member-list owl-carousel owl-theme" id="member-list-0">
                    @for ($i = 1; $i <= 10; $i++)
                        <div class="member-card">
                            <div class="member-photo"></div>
                            <div class="member-name">Member {{ $i }}</div>
                            <div class="member-desc">
                                Role: Member<br>
                                Joined: {{ 2017 + $i }}
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="org-wrapper" data-org-index="1">
            <div class="org-top">
                <div class="org-description">
                    <h2>ORGANISASI 2</h2>
                    <p>This is a placeholder description for organization 2. Actual data will be provided later.</p>
                </div>
                <div class="org-logo-container">
                    <span class="org-nav-button" id="org-prev-1">&#10094;</span>
                    <div class="org-logo">LOGO 2</div>
                    <span class="org-nav-button" id="org-next-1">&#10095;</span>
                </div>
            </div>

            <div class="anggota-section">
                <div class="anggota-title">Anggota</div>
                <div class="member-list owl-carousel owl-theme" id="member-list-1">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="member-card">
                            <div class="member-photo"></div>
                            <div class="member-name">Placeholder Member {{ $i }}</div>
                            <div class="member-desc">
                                Role: Member<br>
                                Joined: 2020
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="org-wrapper" data-org-index="2">
            <div class="org-top">
                <div class="org-description">
                    <h2>ORGANISASI 3</h2>
                    <p>This is a placeholder description for organization 3. Actual data will be provided later.</p>
                </div>
                <div class="org-logo-container">
                    <span class="org-nav-button" id="org-prev-2">&#10094;</span>
                    <div class="org-logo">LOGO 3</div>
                    <span class="org-nav-button" id="org-next-2">&#10095;</span>
                </div>
            </div>

            <div class="anggota-section">
                <div class="anggota-title">Anggota</div>
                <div class="member-list owl-carousel owl-theme" id="member-list-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="member-card">
                            <div class="member-photo"></div>
                            <div class="member-name">Placeholder Member {{ $i }}</div>
                            <div class="member-desc">
                                Role: Member<br>
                                Joined: 2021
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (!window.jQuery) {
                console.error("jQuery is not loaded.");
                return;
            }
            if(typeof $.fn.owlCarousel === 'undefined') {
                console.error("Owl Carousel plugin is not loaded.");
                return;
            }

            const orgWrappers = document.querySelectorAll('.org-wrapper');
            let currentOrgIndex = 0;
            let carousels = [];

            function initCarousel(index) {
                const selector = '#member-list-' + index;
                if (!carousels[index]) {
                    carousels[index] = $(selector).owlCarousel({
                        items: 6,
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        smartSpeed: 800,
                        slideTransition: 'linear',
                        responsive: {
                            0: { items: 1 },
                            600: { items: 5 },
                            1000: { items: 6 }
                        },
                        navText: [
                            '<span class="owl-nav-prev">&#10094;</span>',
                            '<span class="owl-nav-next">&#10095;</span>'
                        ]
                    });
                }
            }

            function destroyCarousel(index) {
                if (carousels[index]) {
                    carousels[index].trigger('destroy.owl.carousel');
                    carousels[index] = null;
                }
            }

            function showOrg(index) {
                if (index === currentOrgIndex) return;
                // Hide current
                orgWrappers[currentOrgIndex].classList.remove('active');
                destroyCarousel(currentOrgIndex);

                // Show new
                orgWrappers[index].classList.add('active');
                initCarousel(index);

                currentOrgIndex = index;
            }

            // Initialize first org carousel
            initCarousel(currentOrgIndex);

            // Add event listeners for nav buttons
            orgWrappers.forEach((wrapper, index) => {
                const prevBtn = wrapper.querySelector('.org-nav-button#org-prev' + (index > 0 ? '-' + index : ''));
                const nextBtn = wrapper.querySelector('.org-nav-button#org-next' + (index > 0 ? '-' + index : ''));

                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        let newIndex = (currentOrgIndex - 1 + orgWrappers.length) % orgWrappers.length;
                        showOrg(newIndex);
                    });
                }
                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        let newIndex = (currentOrgIndex + 1) % orgWrappers.length;
                        showOrg(newIndex);
                    });
                }
            });
        });
    </script>
</x-guest-layout>
