<div>

    <x-navbar :user="$user" />

    <div>
        <section>
            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-[45rem] overflow-hidden">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel/carousel1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel/carousel2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('img/carousel/carousel3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel/carousel4.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    <button type="button" class="w-11 h-2" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-11 h-2" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-11 h-2" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-11 h-2" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-16 bg-black/30 border border-white/40 group-hover:bg-black/50 group-focus:outline-none">
                        <svg class="w-4 h-4 text-red-600 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-16 bg-black/30 border border-white/40 group-hover:bg-black/50 group-focus:outline-none">
                        <svg class="w-4 h-4 text-red-600 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>

        <h1 class="uppercase font-bold text-4xl text-center mt-28">Laptops</h1>

        <div class="grid grid-cols-3 gap-6 my-7 mx-12">
            <article
                class="relative isolate flex flex-col justify-end overflow-hidden rounded-lg px-8 pb-8 pt-40 w-full h-96">
                <img src="{{ asset('img/rog/rog-flow.jpg') }}" alt="University of Southern California"
                    class="absolute inset-0 h-full w-full object-cover">
                <h3 class="absolute top-16 left-1/2 -translate-x-1/2 text-2xl font-bold font-rog text-white">ROG
                    FLOW
                </h3>
            </article>
            <article
                class="relative isolate flex flex-col justify-end overflow-hidden rounded-lg px-8 pb-8 pt-40 w-full h-96">
                <img src="{{ asset('img/rog/rog-zephyrus.jpg') }}" alt="University of Southern California"
                    class="absolute inset-0 h-full w-full object-cover">
                <h3 class="absolute top-16 left-1/2 -translate-x-1/2 text-2xl font-bold font-rog text-white">ROG
                    ZEPHYRUS
                </h3>
            </article>
            <article
                class="relative isolate flex flex-col justify-end overflow-hidden rounded-lg px-8 pb-8 pt-40 w-full h-96">
                <img src="{{ asset('img/rog/rog-strix.jpg') }}" alt="University of Southern California"
                    class="absolute inset-0 h-full w-full object-cover">
                <h3 class="absolute top-16 left-1/2 -translate-x-1/2 text-2xl font-bold font-rog text-white">ROG
                    STRIX
                </h3>
            </article>
        </div>
    </div>
</div>
