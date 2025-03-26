<?php
// Navbar Component
?>

<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-[#F40B0C]">Super Floors</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="hover:text-[#F40B0C] transition-colors">About</a>
                <a href="#services" class="hover:text-[#F40B0C] transition-colors">Services</a>
                <a href="#why-choose-us" class="hover:text-[#F40B0C] transition-colors">Why Choose Us</a>
                <a href="#contact" class="hover:text-[#F40B0C] transition-colors">Contact</a>
                <a href="tel:+27836338268"
                    class="flex items-center bg-[#F40B0C] text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3.5A1.5 1.5 0 013.5 2h13A1.5 1.5 0 0118 3.5v13a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 012 16.5v-13zM16 4H4v12h12V4z">
                        </path>
                    </svg>
                    +27 83 633 8268
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-500 hover:text-gray-600">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#about" class="block px-3 py-2 hover:text-[#F40B0C] transition-colors">About</a>
                <a href="#services" class="block px-3 py-2 hover:text-[#F40B0C] transition-colors">Services</a>
                <a href="#why-choose-us" class="block px-3 py-2 hover:text-[#F40B0C] transition-colors">Why Choose
                    Us</a>
                <a href="#contact" class="block px-3 py-2 hover:text-[#F40B0C] transition-colors">Contact</a>
                <a href="tel:+27836338268"
                    class="flex items-center bg-[#F40B0C] text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3.5A1.5 1.5 0 013.5 2h13A1.5 1.5 0 0118 3.5v13a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 012 16.5v-13zM16 4H4v12h12V4z">
                        </path>
                    </svg>
                    +27 83 633 8268
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Toggle Mobile Menu
    document.getElementById('menu-toggle').addEventListener('click', function () {
        let menu = document.getElementById('mobile-menu');
        let menuIcon = document.getElementById('menu-icon');
        let closeIcon = document.getElementById('close-icon');

        menu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Change Navbar on Scroll
    window.addEventListener('scroll', function () {
        let navbar = document.getElementById('navbar');
        if (window.scrollY > 20) {
            navbar.classList.add('bg-white', 'shadow-md', 'py-2');
            navbar.classList.remove('bg-transparent', 'py-4');
        } else {
            navbar.classList.remove('bg-white', 'shadow-md', 'py-2');
            navbar.classList.add('bg-transparent', 'py-4');
        }
    });
</script>