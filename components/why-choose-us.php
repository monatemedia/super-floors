<?php
// Why Choose Us
?>

<section id="why-choose-us" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&q=80"
                    alt="Beautiful wooden floor" class="rounded-lg shadow-xl" />
            </div>

            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Why Choose Super Floors?
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    We take pride in delivering exceptional quality and service that sets us apart
                    in the industry. Here's why customers trust us with their flooring needs:
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php
                    $reasons = [
                        "18+ years of professional experience",
                        "Dustless sanding technology",
                        "Fully insured and certified team",
                        "Competitive pricing",
                        "Free, no-obligation quotes",
                        "Premium quality materials",
                        "Excellent customer service",
                        "Timely project completion"
                    ];

                    foreach ($reasons as $reason) {
                        echo '
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-check-circle w-6 h-6 text-green-500 flex-shrink-0"></i>
                                <span class="text-gray-700">' . $reason . '</span>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>