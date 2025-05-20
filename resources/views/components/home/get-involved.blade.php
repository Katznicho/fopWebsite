<section class="py-16 bg-[#13AFD1]" id="get-involved" x-data="modal">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-4 text-white text-center">GET INVOLVED</h2>
        <p class="text-white text-xl mb-12 text-center">Join us in making a difference</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Sponsorship Card -->
            <div class="bg-white rounded-lg p-8 text-center shadow-xl">
                <div class="flex justify-center mb-6">
                    <svg class="w-12 h-12 text-[#13AFD1]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm6 9a5 5 0 0 0-5 5v4h10v-4a5 5 0 0 0-5-5zm-6 0a5 5 0 0 0-5 5v4h4v-4a6 6 0 0 1 1.76-4.24A4.97 4.97 0 0 0 9 13z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Sponsorship</h3>
                <p class="text-gray-600 mb-6">Support us through sponsorship and help us create lasting change in children's lives.</p>
                <a href="#sponsor" @click.prevent="showModal = true; actionType = 'sponsor'"
                   class="inline-block px-6 py-3 border-2 border-[#13AFD1] text-[#13AFD1] font-medium rounded-md hover:bg-[#13AFD1] hover:text-white transition-colors duration-300 sponsor-btn">
                    Become a Sponsor
                </a>
            </div>

            <!-- Donation Card -->
            <div class="bg-white rounded-lg p-8 text-center shadow-xl">
                <div class="flex justify-center mb-6">
                    <svg class="w-12 h-12 text-[#13AFD1]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Donation</h3>
                <p class="text-gray-600 mb-6">Make a donation to support our mission and help us provide for the children in need.</p>
                <a href="#donate" @click.prevent="showModal = true; actionType = 'donate'"
                   class="inline-block px-6 py-3 border-2 border-[#13AFD1] text-[#13AFD1] font-medium rounded-md hover:bg-[#13AFD1] hover:text-white transition-colors duration-300 donate-btn">
                    Donate Now
                </a>
            </div>
        </div>

        <!-- Country Selection Modal -->
        <div x-show="showModal" x-cloak @keydown.escape.window="showModal = false"
             class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center"
             x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95">
            <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 shadow-xl" @click.away="showModal = false">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="text-2xl font-semibold text-gray-900">Select Your Country</h3>
                    <button type="button" @click="showModal = false"
                            class="text-gray-400 hover:text-gray-500 focus:outline-none">
                        <span class="sr-only">Close</span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="space-y-4">
                    <div class="relative">
                        <select x-model="selectedCountry"
                                class="block w-full pl-3 pr-10 py-4 text-lg border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#13AFD1] focus:border-transparent appearance-none bg-white">
                            <option value="" disabled selected>Select your country</option>
                            <option value="gb">United Kingdom</option>
                            <option value="nz">New Zealand</option>
                            <option value="ug">Uganda</option>
                            <option value="other">Other Countries</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <button @click="redirectToCountry()" :disabled="!selectedCountry"
                            class="w-full bg-[#13AFD1] text-white px-6 py-4 rounded-xl text-lg font-medium hover:bg-[#0F8FA8] transition-colors disabled:opacity-50 disabled:cursor-not-allowed mt-4">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Alpine.js (should be in layout or header, not repeated here) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js" defer></script> -->

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('modal', () => ({
        showModal: false,
        selectedCountry: '',
        actionType: '',
        init() {
            console.log('Get Involved Modal component initialized');
            this.$watch('showModal', value => {
                document.body.classList.toggle('modal-open', value);
            });
        },
        redirectToCountry() {
            if (!this.selectedCountry) return;

            console.log('Redirecting:', this.actionType, this.selectedCountry);

            if (this.selectedCountry === 'gb') {
                window.location.href = 'https://www.fountainofpeace.net/';
            } else if (this.selectedCountry === 'nz') {
                window.location.href = 'https://www.fountainofpeace.org.nz/';
            } else {
                const baseUrl = 'https://sponsorship.fopinternational.org';
                window.location.href = this.actionType === 'sponsor' ? baseUrl : `${baseUrl}/donate`;
            }

            this.showModal = false;
            this.selectedCountry = '';
            this.actionType = '';
        }
    }));
});
</script>

<style>
/* Prevent scrolling when modal is open */
body.modal-open {
    overflow: hidden;
}

/* Ensure modal is above other elements */
[x-show="showModal"] {
    z-index: 100;
}

/* Hide modal by default */
[x-cloak] {
    display: none;
}
</style>