<section class="py-16 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-[#13AFD1]">Community Impact</h2>
                <p class="text-gray-600 mb-6">
                    In addition to supporting our children at Fountain of Peace village, we've made it our mission to bring life-changing solutions to our nearby vulnerable communities.
                </p>
                <p class="text-gray-600 mb-8">
                    We have over 400 vulnerable children receive an education at our very own Rwenjaza Hillside Nursery and Primary School. We have also built over 3 wells that are providing more communities with the gift of clean, life-sustaining water.
                </p>
                <button @click="window.location.href='https://sponsorship.fopinternational.org/donate'" 
                        class="inline-flex items-center px-6 py-3 bg-[#13AFD1] text-white font-medium rounded-md hover:bg-[#0F8FA8] transition-colors duration-300">
                    SPONSOR
                </button>
            </div>
            
            <div class="relative rounded-xl overflow-hidden shadow-xl">
                <img src="{{ asset('images/community_impact.jpg') }}" 
                     alt="Mothers Matter Initiative" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>