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
                <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-[#13AFD1]">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden sm:flex sm:space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">Home</a>
                <a href="#who-we-are" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">Who We Are</a>
                <a href="#what-we-do" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">What We Do</a>
                <a href="#contact-us" class="text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-sm font-medium">Contact Us</a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="sm:hidden mobile-menu hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">Home</a>
                <a href="#who-we-are" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">Who We Are</a>
                <a href="#what-we-do" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">What We Do</a>
                <a href="#contact-us" class="block text-gray-700 hover:text-[#13AFD1] px-3 py-2 text-base font-medium">Contact Us</a>
            </div>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking on a link
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
});
</script>