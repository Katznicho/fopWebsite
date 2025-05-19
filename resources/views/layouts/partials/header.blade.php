<header class="fixed w-full bg-white transition-all duration-300 z-50" id="main-header">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Fountain of Peace" class="h-12 w-auto">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="sm:hidden">
                <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-[#13AFD1] focus:outline-none focus:ring-2 focus:ring-[#13AFD1]" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" class="menu-icon"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class="close-icon hidden"/>
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden sm:flex sm:items-center sm:space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">Home</a>
                <a href="#who-we-are" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">Who We Are</a>
                <a href="#what-we-do" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">What We Do</a>
                <a href="#contact-us" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">Contact Us</a>
                <a href="{{ route('careers') }}" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">Careers</a>
                <!-- Action Buttons -->
                <a href="#sponsor" class="bg-[#13AFD1] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-[#0e8ca8] transition-colors sponsor-btn" data-action="sponsor">Sponsor</a>
                <a href="#donate" class="bg-[#13AFD1] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-[#0e8ca8] transition-colors donate-btn" data-action="donate">Donate</a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="sm:hidden mobile-menu hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">Home</a>
                <a href="#who-we-are" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">Who We Are</a>
                <a href="#what-we-do" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">What We Do</a>
                <a href="#contact-us" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">Contact Us</a>
                <a href="{{ route('careers') }}" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">Careers</a>
                <!-- Action Buttons -->
                <a href="#sponsor" class="block bg-[#13AFD1] text-white px-4 py-2 rounded-md text-base font-medium hover:bg-[#0e8ca8] mt-2 sponsor-btn" data-action="sponsor">Sponsor</a>
                <a href="#donate" class="block bg-[#13AFD1] text-white px-4 py-2 rounded-md text-base font-medium hover:bg-[#0e8ca8] mt-2 donate-btn" data-action="donate">Donate</a>
            </div>
        </div>
    </nav>

    <!-- Country Selection Modal -->
    <div x-data="modal" x-show="showModal" x-cloak @keydown.escape.window="showModal = false"
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

</header>

<!-- Include Alpine.js -->


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuIcon = mobileMenuButton.querySelector('.menu-icon');
    const closeIcon = mobileMenuButton.querySelector('.close-icon');

    mobileMenuButton.addEventListener('click', function() {
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Close mobile menu when clicking on a link
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });

    // Fallback for Sponsor/Donate buttons if Alpine.js fails
    const buttons = document.querySelectorAll('.sponsor-btn, .donate-btn');
    buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            if (typeof Alpine === 'undefined') {
                e.preventDefault();
                console.error('Alpine.js not loaded. Please ensure the Alpine.js script is included.');
                alert('Sorry, an error occurred. Please try again later.');
            }
        });
    });
});

// Alpine.js data for modal
document.addEventListener('alpine:init', () => {
    Alpine.data('modal', () => ({
        showModal: false,
        selectedCountry: '',
        actionType: '',
        init() {
            // console.log('Modal component initialized');
            // Bind click events to buttons in case Alpine directives fail
            document.querySelectorAll('.sponsor-btn, .donate-btn').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.showModal = true;
                    this.actionType = button.dataset.action;
                    console.log('Button clicked:', this.actionType);
                });
            });
        },
        redirectToCountry() {
            if (!this.selectedCountry) return;

            //console.log('Redirecting:', this.actionType, this.selectedCountry);

            // Define redirection URLs based on country and action
            const urls = {
                sponsor: {
                    gb: '/sponsor/gb',
                    nz: '/sponsor/nz',
                    ug: '/sponsor/ug',
                    other: '/sponsor/other'
                },
                donate: {
                    gb: '/donate/gb',
                    nz: '/donate/nz',
                    ug: '/donate/ug',
                    other: '/donate/other'
                }
            };

            const redirectUrl = urls[this.actionType][this.selectedCountry] || '/';
            // window.location.href = redirectUrl;
            if (this.selectedCountry) {
            if (this.selectedCountry === 'gb') {
                window.location.href = 'https://www.fountainofpeace.net/';
            } else if (this.selectedCountry === 'nz') {
                window.location.href = 'https://www.fountainofpeace.org.nz/';
            } else {
                const baseUrl = 'https://sponsorship.fopinternational.org';
                window.location.href = this.buttonType === 'sponsor' ? baseUrl : `${baseUrl}/donate`;
            }
        }
            this.showModal = false;
            this.selectedCountry = '';
            this.actionType = '';
        }
    }));
});
</script>

<style>
/* Ensure mobile menu fits within viewport */
.mobile-menu {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 50;
}

/* Smooth transitions for menu items */
.mobile-menu a {
    transition: color 0.2s ease, background-color 0.2s ease;
}

/* Prevent scrolling when mobile menu or modal is open */
body.mobile-menu-open, body.modal-open {
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