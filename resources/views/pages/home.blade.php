<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godhana Starter Kit Solutions - Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js" defer></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-float-delay-1 {
            animation: float 6s ease-in-out 1s infinite;
        }
        .animate-float-delay-2 {
            animation: float 6s ease-in-out 2s infinite;
        }
        .text-gradient {
            background: linear-gradient(90deg, #3182ce, #805ad5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-gradient {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Custom modal animation */
        @keyframes scaleIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal-content {
            animation: scaleIn 0.3s ease-out;
        }

        .modal-input-icon {
            @apply absolute left-3 top-1/2 -translate-y-1/2 text-gray-400;
        }
    </style>
</head>
<body class="bg-gray-50 text-white">
    <!-- Enhanced Hero Section with Full-Screen Carousel -->
    <div class="relative h-screen" x-data="{ currentSlide: 0, slides: [
        { image: '{{ asset('images/web-dev-1.jpg') }}', title: 'Godhana Starter Kit', subtitle: 'Kickstart your projects with customizable tools and templates.', btnText: 'Explore Features', link: '' },
        { image: '{{ asset('images/web-dev-2.jpg') }}', title: 'Build Faster, Smarter', subtitle: 'Edit and tailor our kit to fit your unique development needs.', btnText: 'Get Started', link: '{{ route('home') }}' },
        { image: '{{ asset('images/web-dev-3.jpg') }}', title: 'Developer Freedom', subtitle: 'Open-source flexibility for seamless customization.', btnText: 'Join the Community', link: '{{ route('contact') }}' }
    ] }" x-init="setInterval(() => { currentSlide = currentSlide === slides.length - 1 ? 0 : currentSlide + 1 }, 6000)">
        <div class="h-screen overflow-hidden">
            <template x-for="(slide, index) in slides" :key="index">
                <div
                    x-show="currentSlide === index"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 transform scale-105"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute inset-0"
                >
                    <div class="w-full h-full">
                        <div class="absolute inset-0 bg-black opacity-60"></div>
                        <img :src="slide.image" class="w-full h-full object-cover" alt="Slide">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center px-4 max-w-4xl mx-auto">
                                <h1 class="text-5xl md:text-7xl font-bold mb-4 leading-tight" x-text="slide.title" x-transition:enter="transition ease-out duration-1000 delay-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"></h1>
                                <p class="text-xl md:text-3xl mb-8 text-gray-300" x-text="slide.subtitle" x-transition:enter="transition ease-out duration-1000 delay-500" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0"></p>
                                <a :href="slide.link" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-lg text-lg" x-text="slide.btnText" x-transition:enter="transition ease-out duration-1000 delay-700" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" style="border-radius:30px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <!-- Enhanced Carousel Controls -->
        <div class="absolute bottom-10 left-0 right-0 flex justify-center space-x-4">
            <template x-for="(slide, index) in slides" :key="index">
                <button
                    @click="currentSlide = index"
                    :class="{'w-12 bg-blue-500': currentSlide === index, 'w-4 bg-gray-400': currentSlide !== index}"
                    class="h-3 rounded-full transition-all duration-500 hover:bg-blue-400"
                ></button>
            </template>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services" class="text-white opacity-70 hover:opacity-100 transition">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </div>

    @include('layouts.nav')

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-100 text-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-6 text-gradient">About Godhana Starter Kit</h2>
            <div class="glass-card p-8 mx-auto max-w-3xl">
                <p class="text-lg text-gray-700">Godhana Starter Kit is an open-source platform designed to empower developers with customizable tools and templates. Launched to accelerate web development, it offers a flexible foundation for building modern, scalable applications. Join a growing community dedicated to innovation and collaboration.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gradient text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-8 text-center text-gradient">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass-card p-6 text-center hover:shadow-lg transition duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-paint-brush text-4xl mb-4 text-blue-400 animate-float"></i>
                    <h3 class="text-xl font-semibold mb-2">Custom Templates</h3>
                    <p class="text-gray-300">Tailor-made templates to kickstart your projects with ease.</p>
                    <a href="#" class="mt-4 inline-block text-blue-300 hover:text-blue-200">Learn More</a>
                </div>
                <div class="glass-card p-6 text-center hover:shadow-lg transition duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-code-branch text-4xl mb-4 text-blue-400 animate-float-delay-1"></i>
                    <h3 class="text-xl font-semibold mb-2">Open-Source Tools</h3>
                    <p class="text-gray-300">Access a suite of open-source resources for flexible development.</p>
                    <a href="#" class="mt-4 inline-block text-blue-300 hover:text-blue-200">Learn More</a>
                </div>
                <div class="glass-card p-6 text-center hover:shadow-lg transition duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-headset text-4xl mb-4 text-blue-400 animate-float-delay-2"></i>
                    <h3 class="text-xl font-semibold mb-2">Developer Support</h3>
                    <p class="text-gray-300">Expert guidance to enhance your development journey.</p>
                    <a href="#" class="mt-4 inline-block text-blue-300 hover:text-blue-200">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gray-800 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-6 text-white">Ready to Get Started?</h2>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">Explore how Godhana Starter Kit can transform your web development process. Contact us for a consultation or request a quote today.</p>
            <div class="space-x-4">
                <button @click="openModal('consultation')" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300">Book Consultation</button>
                <button @click="openModal('quote')" class="bg-transparent border-2 border-white hover:bg-white hover:text-gray-800 text-white font-bold py-3 px-6 rounded-full transition duration-300">Request Quote</button>
            </div>
        </div>
    </section>

   

    @include('layouts.footer')

    <script>
        // AlpineJS component for managing modals and navigation
        document.addEventListener('alpine:init', () => {
            Alpine.data('productInteractions', () => ({
                showQuoteModal: false,
                showConsultationModal: false,

                // Navigate to specific pages based on product category and size
                navigateToGetStarted(productType, size = null) {
                    if (productType === 'it-services') {
                        if (size === 'small') {
                            window.location.href = '/services/it-projects/small';
                        } else if (size === 'medium') {
                            window.location.href = '/services/it-projects/medium';
                        } else if (size === 'large') {
                            window.location.href = '/services/it-projects/large';
                        }
                    } else if (productType === 'retainer') {
                        if (size === 'bronze') {
                            window.location.href = '/services/retainer/bronze';
                        } else if (size === 'silver') {
                            window.location.href = '/services/retainer/silver';
                        } else if (size === 'gold') {
                            window.location.href = '/services/retainer/gold';
                        }
                    }
                },

                // Open the appropriate modal
                openModal(modalType) {
                    if (modalType === 'quote') {
                        this.showQuoteModal = true;
                    } else if (modalType === 'consultation') {
                        this.showConsultationModal = true;
                    }
                },

                // Close the currently open modal
                closeModal(modalType) {
                    if (modalType === 'quote') {
                        this.showQuoteModal = false;
                    } else if (modalType === 'consultation') {
                        this.showConsultationModal = false;
                    }
                },

                // Submit the form from the modal
                submitForm(formType) {
                    // Here you would typically handle form validation and submission
                    console.log(`Submitting ${formType} form`);

                    // Close the modal after submission
                    this.closeModal(formType);

                    // Show a success message
                    alert(`Your ${formType} request has been submitted successfully. We'll contact you shortly.`);
                }
            }));
        });
    </script>
</body>
</html>
