<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Godhana Starter Kit</title>
    <link rel="icon" type="image/png" href="{{ asset('images/godhana-logo.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        :root {
            --primary-color: #34D399;
            --secondary-color: #3B82F6;
            --text-color: #1F2937;
            --light-gray: #F3F4F6;
            --transition: all 0.5s ease-in-out;
        }

        body {
            margin: 0;
            background-color: #f9fafb;
            color: var(--text-color);
            overflow-x: hidden;
            line-height: 1.6;
            font-family: 'Figtree', sans-serif;
        }

        /* Hero section with parallax */
        .hero-section {
            height: 60vh;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset('images/dev-workspace.jpg') }}') center/cover no-repeat;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            max-width: 900px;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: slideInDown 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero-btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background-color: white;
            color: var(--primary-color);
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            transition: var(--transition);
            animation: fadeIn 2s ease-in-out;
        }

        .hero-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        /* Animated shapes */
        .shape {
            position: absolute;
            z-index: 0;
            opacity: 0.1;
        }

        .shape-1 {
            top: 10%;
            left: 5%;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--primary-color);
            animation: float 8s infinite ease-in-out;
        }

        .shape-2 {
            bottom: 10%;
            right: 5%;
            width: 200px;
            height: 200px;
            background: var(--secondary-color);
            animation: float 6s infinite ease-in-out reverse;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }

        @keyframes slideInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* About sections */
        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
            color: var(--text-color);
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }

        .about-section {
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .about-section:nth-child(even) {
            background-color: white;
        }

        /* Our story section */
        .story-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .story-text {
            flex: 1;
        }

        .story-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Mission & Vision */
        .mission-vision-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .mission-vision-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            height: 100%;
        }

        .mission-vision-card:hover {
            transform: translateY(-10px);
        }

        .card-header {
            padding: 2rem;
            color: white;
            position: relative;
        }

        .mission-header {
            background: linear-gradient(135deg, #34D399, #10B981);
        }

        .vision-header {
            background: linear-gradient(135deg, #3B82F6, #2563EB);
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .card-body {
            padding: 2rem;
        }

        /* Values section */
        .values-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .value-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            padding: 2rem;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 30px;
            right: 30px;
            height: 5px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            z-index: -1;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .value-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            transition: var(--transition);
        }

        .value-card:hover .value-icon {
            transform: scale(1.2);
        }

        .value-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        /* Timeline section */
        .timeline-container {
            position: relative;
            max-width: 1000px;
            margin: 4rem auto 0;
            padding: 2rem 0;
        }

        .timeline-line {
            position: absolute;
            width: 4px;
            background-color: var(--light-gray);
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            margin-bottom: 4rem;
            position: relative;
            width: 100%;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-content {
            width: 45%;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .timeline-content::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: white;
            top: 30px;
            transform: rotate(45deg);
        }

        .timeline-left .timeline-content {
            margin-right: auto;
        }

        .timeline-right .timeline-content {
            margin-left: auto;
        }

        .timeline-left .timeline-content::after {
            right: -10px;
        }

        .timeline-right .timeline-content::after {
            left: -10px;
        }

        .timeline-dot {
            position: absolute;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            left: 50%;
            top: 30px;
            transform: translateX(-50%);
            z-index: 2;
            box-shadow: 0 0 0 4px white;
        }

        .timeline-year {
            position: absolute;
            top: 30px;
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--secondary-color);
        }

        .timeline-left .timeline-year {
            right: calc(55% + 20px);
        }

        .timeline-right .timeline-year {
            left: calc(55% + 20px);
        }

        .timeline-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-color);
        }

        /* Partners section */
        .partners-section {
            padding: 6rem 0;
            background-color: white;
            overflow: hidden;
        }

        .marquee-container {
            display: flex;
            width: 100%;
            overflow: hidden;
            margin: 3rem 0;
        }

        .marquee-track {
            display: flex;
            animation: marquee 30s linear infinite;
            will-change: transform;
            white-space: nowrap;
        }

        .marquee-track.reverse {
            animation-direction: reverse;
            animation-delay: -15s;
        }

        .partner-item {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 200px;
            height: 100px;
            margin: 0 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .partner-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .partner-logo {
            max-width: 120px;
            max-height: 60px;
            object-fit: contain;
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* Responsive styles */
        @media (min-width: 768px) {
            .story-content {
                flex-direction: row;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .timeline-line {
                left: 30px;
            }

            .timeline-content {
                width: 85%;
                margin-left: auto !important;
            }

            .timeline-left .timeline-content::after,
            .timeline-right .timeline-content::after {
                left: -10px;
            }

            .timeline-dot {
                left: 30px;
            }

            .timeline-left .timeline-year,
            .timeline-right .timeline-year {
                left: 80px;
                top: -30px;
            }
        }
    </style>
</head>
<body x-data="{ scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 50" class="bg-gray-100">
    @include('layouts.nav')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="hero-bg"></div>

        <div class="hero-content">
            <h1 class="hero-title">About Godhana Starter Kit</h1>
            <p class="hero-subtitle">Empowering developers with customizable, open-source tools for modern web development.</p>
            <a href="#our-story" class="hero-btn">Discover Our Journey</a>
        </div>
    </section>

    <!-- Our Story Section -->
    <section id="our-story" class="about-section">
        <div class="about-content">
            <h2 class="section-title" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">Our Story</h2>

            <div class="story-content">
                <div class="story-text" x-intersect:enter="$el.classList.add('animate__animated', 'animate__slideInLeft')">
                    <p class="mb-3">Godhana Starter Kit was launched in 2023 to revolutionize web development by providing developers with a flexible, open-source toolkit.</p>
                    <p class="mb-3">Our small but dedicated team focuses on creating customizable templates and components, driven by a passion for enabling developers to build modern, scalable applications with ease.</p>
                    <p>By fostering an open-source community, we ensure Godhana remains a dynamic resource, evolving with the needs of developers worldwide.</p>
                </div>

                <div class="story-image" x-intersect:enter="$el.classList.add('animate__animated', 'animate__slideInRight')">
                    <img src="{{ asset('images/dev-team-coding.jpg') }}" alt="Godhana Development Team" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="about-section">
        <div class="about-content">
            <h2 class="section-title" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">Mission & Vision</h2>

            <div class="mission-vision-container">
                <div class="mission-vision-card" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeInUp')" x-intersect:enter.delay="100">
                    <div class="card-header mission-header">
                        <div class="card-icon"><i class="fas fa-bullseye"></i></div>
                        <h3 class="card-title">Our Mission</h3>
                    </div>
                    <div class="card-body">
                        <p>To accelerate web development by providing developers with a customizable, open-source toolkit, enabling them to create modern, scalable applications with ease and adapt to their unique project needs.</p>
                    </div>
                </div>

                <div class="mission-vision-card" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeInUp')" x-intersect:enter.delay="300">
                    <div class="card-header vision-header">
                        <div class="card-icon"><i class="fas fa-eye"></i></div>
                        <h3 class="card-title">Our Vision</h3>
                    </div>
                    <div class="card-body">
                        <p>To become the leading open-source resource for developers worldwide, offering speed, flexibility, and creativity through Godhana Starter Kit, empowering innovative web solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Values Section -->
    <section class="about-section">
        <div class="about-content">
            <h2 class="section-title" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">Our Values</h2>

            <div class="values-container">
                <div class="value-card" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeInUp')" x-intersect:enter.delay="100">
                    <div class="value-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="value-title">Open-Source</h3>
                    <p>We champion open collaboration, sharing knowledge and resources to empower the developer community.</p>
                </div>

                <div class="value-card" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeInUp')" x-intersect:enter.delay="200">
                    <div class="value-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="value-title">Customizability</h3>
                    <p>We provide flexible tools and templates, allowing developers to tailor solutions to their needs.</p>
                </div>

                <div class="value-card" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeInUp')" x-intersect:enter.delay="300">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="value-title">Community</h3>
                    <p>We thrive on a global developer community, fostering support and shared success.</p>
                </div>

                <div class="value-card" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeInUp')" x-intersect:enter.delay="400">
                    <div class="value-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="value-title">Innovation</h3>
                    <p>We continuously evolve our toolkit to deliver cutting-edge web development solutions.</p>
                </div>

                <div class="value-card" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeInUp')" x-intersect:enter.delay="500">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="value-title">Support</h3>
                    <p>We offer expert guidance to help developers succeed with Godhana Starter Kit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="about-section">
        <div class="about-content">
            <h2 class="section-title" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">Our Journey</h2>

            <div class="timeline-container">
                <div class="timeline-line"></div>

                <div class="timeline-item timeline-left" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2023</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Kit Launched</h3>
                        <p>Godhana Starter Kit was introduced in 2023, offering developers a flexible, open-source toolkit to accelerate web development.</p>
                    </div>
                </div>

                <div class="timeline-item timeline-right" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2024</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Community Growth</h3>
                        <p>The Godhana community expanded, with thousands of developers contributing to and benefiting from the toolkit.</p>
                    </div>
                </div>

                <div class="timeline-item timeline-left" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2025</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Future Innovations</h3>
                        <p>Planned enhancements include advanced templates and broader platform support to empower global developers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="about-content">
            <h2 class="section-title" x-intersect:enter="$el.classList.add('animate__animated', 'animate__fadeIn')">Our Partners</h2>

            <div class="marquee-container">
                <div class="marquee-track">
                    <!-- Placeholder for partner logos -->
                    <div class="partner-item"><img src="{{ asset('images/placeholder-partner1.png') }}" alt="Partner 1" class="partner-logo"></div>
                    <div class="partner-item"><img src="{{ asset('images/placeholder-partner2.png') }}" alt="Partner 2" class="partner-logo"></div>
                    <div class="partner-item"><img src="{{ asset('images/placeholder-partner3.png') }}" alt="Partner 3" class="partner-logo"></div>
                </div>
                <div class="marquee-track reverse">
                    <div class="partner-item"><img src="{{ asset('images/placeholder-partner1.png') }}" alt="Partner 1" class="partner-logo"></div>
                    <div class="partner-item"><img src="{{ asset('images/placeholder-partner2.png') }}" alt="Partner 2" class="partner-logo"></div>
                    <div class="partner-item"><img src="{{ asset('images/placeholder-partner3.png') }}" alt="Partner 3" class="partner-logo"></div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>
