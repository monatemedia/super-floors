<?php
$current_year = date('Y');
?>

<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Super Floors</h3>
                <p class="text-gray-400">Professional Care for Your Floors Since 2005</p>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <div class="space-y-2">
                    <a href="tel:+27836338268"
                        class="flex items-center text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2">
                            <path
                                d="M21 15v4a2 2 0 0 1-2 2h-4v-6h6a2 2 0 0 1 2 2zM3 4a2 2 0 0 1 2-2h4v6H3a2 2 0 0 1-2-2zM14 9v6H9V9h5zm5 1.5V12a.5.5 0 0 1-.5.5H15v2h4.5A1.5 1.5 0 0 0 21 12V10.5A1.5 1.5 0 0 0 19.5 9H15V7h4.5A1.5 1.5 0 0 0 21 8.5V7a1.5 1.5 0 0 0-1.5-1.5H15V4h4.5A2 2 0 0 1 21 5.5V7a2 2 0 0 1-2 2H15V9h4z" />
                        </svg>
                        +27 83 633 8268
                    </a>
                    <a href="mailto:luke@super-floors.co.za"
                        class="flex items-center text-gray-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2">
                            <path d="M1 1h22v22H1z" fill="none" />
                            <path d="M3 2v20h18V2H3zm8.5 3.5L21 11l-9.5 5.5L3 11z" />
                        </svg>
                        luke@super-floors.co.za
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                <a href="https://www.facebook.com/profile.php?id=100067323252480" target="_blank"
                    rel="noopener noreferrer"
                    class="flex items-center text-gray-400 hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" stroke-width="2">
                        <path
                            d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-13v6h2v-6h-2zm0 10v2h2v-2h-2z" />
                    </svg>
                    Facebook
                </a>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © 2005 - <?php echo $current_year; ?> Super Floors | All rights reserved
                </p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="/privacy-policy" class="text-gray-400 hover:text-white transition-colors text-sm">
                        Privacy Policy
                    </a>
                    <span class="text-gray-400">|</span>
                    <a href="https://www.monatemedia.com/" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors text-sm">
                        Powered by Monate Media
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>