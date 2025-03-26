<?php
// Contact Us
?>

<section id="contact" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
            <p class="text-xl text-gray-600">
                Get in touch for a free quote or any inquiries
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-6">Get In Touch</h3>

                <div class="space-y-6">
                    <a href="tel:+27836338268"
                        class="flex items-center space-x-4 text-gray-600 hover:text-[#F40B0C] transition-colors">
                        <i class="fas fa-phone w-6 h-6"></i>
                        <span>+27 83 633 8268</span>
                    </a>

                    <a href="mailto:luke@super-floors.co.za"
                        class="flex items-center space-x-4 text-gray-600 hover:text-[#F40B0C] transition-colors">
                        <i class="fas fa-envelope w-6 h-6"></i>
                        <span>luke@super-floors.co.za</span>
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=100067323252480" target="_blank"
                        rel="noopener noreferrer"
                        class="flex items-center space-x-4 text-gray-600 hover:text-[#F40B0C] transition-colors">
                        <i class="fab fa-facebook w-6 h-6"></i>
                        <span>Follow us on Facebook</span>
                    </a>

                    <div class="flex items-center space-x-4 text-gray-600">
                        <i class="fas fa-clock w-6 h-6"></i>
                        <div>
                            <p>Mon-Fri: 9:00 AM - 5:00 PM</p>
                            <p>Sat: 9:00 AM - 12:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <form action="your_form_handler.php" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#F40B0C] focus:ring focus:ring-[#F40B0C] focus:ring-opacity-50"
                            required />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#F40B0C] focus:ring focus:ring-[#F40B0C] focus:ring-opacity-50"
                            required />
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="tel" id="phone" name="phone"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#F40B0C] focus:ring focus:ring-[#F40B0C] focus:ring-opacity-50" />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#F40B0C] focus:ring focus:ring-[#F40B0C] focus:ring-opacity-50"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-[#F40B0C] text-white px-6 py-3 rounded-md hover:bg-red-600 transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>