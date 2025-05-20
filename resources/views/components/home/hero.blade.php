<section x-data="{
    currentSlide: 0,
    showModal: false,
    selectedCountry: '',
    redirectToCountry() {
        if (this.selectedCountry) {
            if (this.selectedCountry === 'gb') {
                window.location.href = 'https://www.fountainofpeace.net/';
            } else if (this.selectedCountry === 'nz') {
                window.location.href = 'https://www.fountainofpeace.org.nz/';
            } else {
                window.location.href = 'https://sponsorship.fopinternational.org/';
            }
        }
    },
    slides: [
        {
            image: '{{ asset('images/hero_first.jpg') }}',
            title: 'Giving Hope to Children',
            subtitle: 'In  Uganda',
            body: 'We\'re dedicated to giving abandoned and destitute children a chance to survive, thrive and be all they can be.'
        },
        {
            image: '{{ asset('images/hero.jpg') }}',
            title: 'Building Hope',
            subtitle: 'One Child at a Time',
            body: 'Every child deserves a chance at a better future. Help us make that possible through education and care.'
        },
        {
            image: '{{ asset('images/buidling_families.jpg') }}',
            title: 'Creating Impact',
            subtitle: 'In Communities',
            body: 'Together we can create lasting change in the lives of children and communities across Western Uganda.'
        }
    ],
    init() {}
}" class="relative h-[100vh] flex items-center overflow-hidden pt-[96px]" x-init="init()">

    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="currentSlide === index" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 transform translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full" class="absolute inset-0">
            <div class="absolute inset-0 z-0 bg-gray-900">
                <img :src="slide.image" :alt="slide.title">
            </div>
            <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-white h-full flex items-center mt-12">
                <div class="text-center w-full">
                    <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl">
                        <span class="block" x-text="slide.title"></span>
                        <span class="block text-[#13AFD1]" x-text="slide.subtitle"></span>
                    </h1>
                    <p class="mx-auto mt-3 max-w-md text-base sm:text-lg md:mt-5 md:max-w-3xl md:text-xl"
                        x-text="slide.body"></p>
                    <div class="mt-8 flex justify-center">
                        <a href="#get-involved"
                           class="rounded-md bg-[#13AFD1] px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-[#0F8FA8]">
                            Get Involved
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <!-- Navigation Buttons -->
    <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length"
        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 z-20">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button @click="currentSlide = (currentSlide + 1) % slides.length"
        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 z-20">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index"
                :class="{ 'bg-white': currentSlide === index, 'bg-white/50': currentSlide !== index }"
                class="w-2 h-2 rounded-full transition-all duration-300"></button>
        </template>
    </div>



</section>
