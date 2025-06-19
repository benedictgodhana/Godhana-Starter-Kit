<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godhana Starter Kit Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: blue;
            --secondary:blue;
            --accent:blue;
            --light: blue;
            --dark: blue;
            --gray:blue;
        }


        @font-face {
          font-family: 'Futura LT';
          src: url('/fonts/futura-lt/FuturaLT-Book.ttf') format('woff2'),
               url('/fonts/futura-lt/FuturaLT.ttf') format('woff'),
               url('/fonts/futura-lt/FuturaLT-Condensed.ttf') format('truetype');
          font-weight: normal;
          font-style: normal;
        }

        body {
            font-family:'Futura LT', sans-serif;
            margin: 0;
            padding: 0;
        }

        .nav-bg {
            background:white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(0);
            transition: all 0.3s ease;
            color:black;
        }

        .nav-scrolled {
            background:white;
        }

        .text-primary {
            color:black;
        }

        .text-white {
            color: #fff;
        }

        .bg-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        .hover-effect {
            position: relative;
            overflow: hidden;
        }

        .hover-effect::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .hover-effect:hover::after {
            width: 100%;
        }

        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mobile-menu.show {
            transform: translateX(0);
        }

        .menu-backdrop {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .menu-backdrop.show {
            opacity: 1;
        }

        .mobile-menu .nav-link {
    color: white !important;
}

.mobile-menu .nav-link:hover {
    color: var(--secondary);
}


        .logo-text {
            font-weight: 700;
            font-size: 1.5rem;
            color:black;
        }

        .logo-highlight {
            color: var(--secondary);
        }

        .nav-link {
            color: black;
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--secondary);
        }

        .contact-button {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            box-shadow: 0 4px 15px rgba(0, 99, 178, 0.3);
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 4px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .contact-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 99, 178, 0.4);
        }

        .login-button {
            background: transparent;
            border: 2px solid var(--secondary);
            color:black;
            transition: all 0.3s ease;
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .login-button:hover {
            background-color: rgba(30, 144, 255, 0.1);
            color: var(--secondary);
            transform: translateY(-2px);
        }

        @media (min-width: 1024px) {
            .mobile-menu {
                display: none;
            }




        }
    </style>
</head>
<body>
    <!-- Backdrop -->
    <div id="menuBackdrop" class="fixed inset-0 bg-black bg-opacity-50 z-40 menu-backdrop hidden lg:hidden"></div>

    <nav class="fixed w-full top-0 z-50 nav-bg">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
            <div style="display: flex; justify-content: space-between; height: 5rem; align-items: center;">
                <!-- Logo -->
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <a href="#" style="display: flex; align-items: center; text-decoration: none;">
                    <img src="/images/DIS15-removebg-preview.png" alt="Godhana Starter Kit Logo" class="logo-image mr-4" style="height: 50px;">
                   <p style="font-size:1.5rem;font-weight:700">Godhana Starter Kit<span class="logo-highlight"></span></p>


                    </a>

                </div>

                <!-- Desktop Navigation -->
                <div style="display: none; align-items: center; gap: 2rem;" class="lg-nav">
                    <a href="/" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                        Home
                    </a>


 <a href="/about" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                    About Us
                    </a>



                    <div style="display: flex; align-items: center; gap: 1rem;">

                        <a href="/contact" class="contact-button">
                            <i class="fas fa-envelope" style="margin-right: 0.5rem;"></i>
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="menuButton" style="background:black; border: none; color: white; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-bars" style="font-size: 1.5rem;"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu fixed top-20 left-0 w-full" style="background-color: #0A1A2A; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); z-index: 50;">
            <div style="padding: 1rem;">
                <a href="/" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-home" style="font-size: 1.1rem; margin-right: 0.75rem;"></i> Home
                </a>



                <a href="/about" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-info" style="font-size: 1.1rem; margin-right: 0.75rem;"></i> About Us
                </a>


                <a href="/services" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-cogs" style="font-size: 1.1rem; margin-right: 0.75rem;"></i> Services
                </a>

                <div style="padding-top: 1rem;">
                    <a href="/contact" class="contact-button" style="display: flex; justify-content: center; width: 100%;">
                        <i class="fas fa-envelope" style="margin-right: 0.5rem;"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </nav>



    <script>
        // Mobile Menu Toggle
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuBackdrop = document.getElementById('menuBackdrop');
        let isMenuOpen = false;

        function toggleMenu() {
            isMenuOpen = !isMenuOpen;
            mobileMenu.classList.toggle('show');
            menuBackdrop.classList.toggle('show');
            menuButton.innerHTML = isMenuOpen ?
                '<i class="fas fa-times" style="font-size: 1.5rem;"></i>' :
                '<i class="fas fa-bars" style="font-size: 1.5rem;"></i>';
        }

        menuButton.addEventListener('click', toggleMenu);
        menuBackdrop.addEventListener('click', toggleMenu);

        // Close menu on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && isMenuOpen) toggleMenu();
        });

        // Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });

        // Show desktop nav for larger screens
        function handleResize() {
            const lgNav = document.querySelector('.lg-nav');
            const menuBtn = document.getElementById('menuButton');
            if (window.innerWidth >= 1024) {
                lgNav.style.display = 'flex';
                menuBtn.style.display = 'none';
            } else {
                lgNav.style.display = 'none';
                menuBtn.style.display = 'flex';
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize(); // Initial call

        // Active Link Detection
        const currentUrl = window.location.pathname;
        document.querySelectorAll('nav a').forEach(link => {
            if (link.getAttribute('href') === currentUrl) {
                link.classList.add('active');
                link.style.color = '#1E90FF';
            }
        });
    </script>
</body>
</html>
