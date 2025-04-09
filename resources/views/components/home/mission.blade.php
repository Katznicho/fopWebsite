<div x-data="{ 
    showModal: false,
    selectedCountry: '',
    redirectToCountry() {
        if (this.selectedCountry) {
            if (this.selectedCountry === 'gb') {
                window.location.href = 'https://www.fountainofpeace.net/';
            } else if (this.selectedCountry === 'nz') {
                window.location.href = 'https://www.fountainofpeace.org.nz/';
            } else {
                window.location.href = 'https://sponsorship.fopinternational.org/donate';
            }
        }
    }
}">
    <section class="py-16 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-[#13AFD1]">Rescue. Nurture. Empower.</h2>
                    <p class="text-gray-600 mb-6">
                        Over the years, we have been privileged to intervene at the right time to save a child's life. Some of our rescue missions have often made the difference between life and death for these abandoned and/or orphaned children in dire need of life support.
                    </p>
                    <p class="text-gray-600 font-semibold text-lg mb-8">
                        Together we are building a brighter future, full of hope and transformation.
                    </p>
                    <button @click="showModal = !showModal" 
                            type="button"
                            class="inline-flex items-center px-6 py-3 bg-[#13AFD1] text-white font-medium rounded-md hover:bg-[#0F8FA8] transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        Donate
                    </button>
                </div>
                
                <div class="relative aspect-video rounded-xl overflow-hidden shadow-xl" x-data="{ playing: false }">
                    <img x-show="!playing" 
                         src="https://img.youtube.com/vi/k3MM1o558rs/maxresdefault.jpg" 
                         alt="Video Thumbnail" 
                         class="w-full h-full object-cover">
                         
                    <button x-show="!playing" 
                            @click="playing = true" 
                            class="absolute inset-0 w-full h-full flex items-center justify-center group">
                        <div class="w-20 h-20 bg-white/90 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-300">
                            <svg class="w-10 h-10 text-[#13AFD1]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </button>
                    
                    <iframe x-show="playing"
                            class="absolute inset-0 w-full h-full"
                            x-bind:src="playing ? 'https://www.youtube.com/embed/k3MM1o558rs?autoplay=1' : ''"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    
        <!-- Country Selection Modal -->
        <div x-show="showModal" 
             x-cloak
             @keydown.escape.window="showModal = false"
             class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95">
            <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 shadow-xl" 
                 @click.away="showModal = false">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-semibold text-gray-900">Select Your Country</h3>
                    <button type="button" 
                            @click="showModal = false" 
                            class="text-gray-400 hover:text-gray-500 focus:outline-none">
                        <span class="sr-only">Close</span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            <div class="space-y-4">
                <div class="relative">
                    <select x-model="selectedCountry" 
                            class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-[#13AFD1] focus:border-[#13AFD1] rounded-md appearance-none bg-white">
                        <option value="" disabled selected>Select your country</option>
                        <option value="gb">United Kingdom</option>
                        <option value="nz">New Zealand</option>
                        <option value="ug">Uganda</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
                
                <button @click="redirectToCountry()" 
                        x-bind:disabled="!selectedCountry"
                        class="w-full bg-[#13AFD1] text-white px-6 py-3 rounded-md hover:bg-[#0F8FA8] transition-colors duration-300 disabled:opacity-50 disabled:cursor-not-allowed font-medium">
                    Continue
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    [x-cloak] { display: none !important; }
    
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    }
</style>
