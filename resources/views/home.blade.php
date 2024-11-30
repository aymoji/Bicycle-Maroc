 @extends('layouts.myapp')
@section('content')
    <main>



        <div class="bg-sec-100 ">
        <div id="carousel-example" class="relative w-full">
    
    
</div><!-- Slider container -->
<div class="relative">
    <!-- Slider indicators -->
    <div class="absolute bottom-0 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse" data-carousel>
        <button id="carousel-indicator-1" type="button" class="h-3 w-3 rounded-full bg-black" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="1"></button>
        <button id="carousel-indicator-2" type="button" class="h-3 w-3 rounded-full bg-gray-500" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="2"></button>
        <button id="carousel-indicator-3" type="button" class="h-3 w-3 rounded-full bg-gray-500" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="3"></button>
    </div>

    <!-- Slider controls -->
    <button id="data-carousel-prev" type="button" class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-black/30 group-hover:bg-black/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-black dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
            <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <!--<span class="sr-only">Previous</span> <!-- Added an accessible text for screen readers 
        </span>
        <span class="absolute top-1/2 -translate-y-1/2 left-0 text-xs text-white dark:text-gray-800">Previous</span> <!-- Added visible text for clarity -->
    </button>
    <button id="data-carousel-next" type="button" class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-black/30 group-hover:bg-black/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-black dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
            <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
           <!-- <span class="sr-only">Next</span> <!-- Added an accessible text for screen readers 
        </span>
        <span class="absolute top-1/2 -translate-y-1/2 right-0 text-xs text-white dark:text-gray-800">Next</span> <!-- Added visible text for clarity -->
    </button>
    
    

<!-- Slide 1 -->
<div id="carousel-item-1" class="hidden">
    <div class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
        <div class="flex flex-col md:flex-row md:items-center md:w-3/5 mx-12 md:ms-20 md:mx-0">
            <div class="md:w-3/5 md:hidden mr-8">
                <img loading="lazy" src="/images/home/HomePic1.jpeg" alt="home car" class="w-full rounded-3xl shadow-2xl">
            </div>
            <div class="max-w-screen-lg md:w-full mx-auto md:text-left md:pl-8">
                <h1 class="md:text-start text-center font-bold text-4xl text-gray-900 mb-8 md:text-7xl">
                    <span class="text-pr-400 font-bold italic" > BICYCLE MAROC
                </h1>
                <p class="text-justify md:mx-0 mx-8 mb-8">
                    Bicycle Maroc simplifie la location de vélos au Maroc avec une plateforme conviviale. Explorez notre sélection de vélos pour des déplacements écologiques et actifs dans la capital Rabat. Optez pour une mobilité durable avec Bicycle Maroc.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="/bikes">
                        <button class="bg-pr-400 p-2 border-2 border-white rounded-md text-white hover:bg-pr-500 md:me-12 md:mx-12 mx-7 font-bold w-32">BIKES</button>
                    </a>
                    <a href="/contact_us">
                        <button class="border-2 border-pr-400 text-black p-2 rounded-md hover:bg-sec-400 w-32">CONTACT US</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="md:w-3/5 hidden md:block ml-11">
            <img loading="lazy" src="/images/home/HomePic1.jpeg" alt="home car" class="w-full rounded-3xl shadow-2xl">
        </div>
    </div>
</div>

<!-- Slide 2 -->
<div id="carousel-item-2" class="hidden">
    <div class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
        <div class="flex flex-col md:flex-row md:items-center md:w-3/5 mx-12 md:ms-20 md:mx-0">
            <div class="md:w-3/5 md:hidden mr-8">
                <img loading="lazy" src="/images/home/HomePic1.jpeg" alt="home car" class="w-full rounded-3xl shadow-2xl">
            </div>
            <div class="max-w-screen-lg md:w-full mx-auto md:text-left md:pl-8">
                <h1 class="md:text-start text-center font-bold text-4xl text-gray-900 mb-8 md:text-7xl">
                    <span class="text-pr-400 font-bold italic"> Vos vélos près de vous
                </h1>
                <p class="text-justify md:mx-0 mx-8 mb-8">
                    Bicycle Maroc simplifie votre expérience en vous proposant des emplacements de vélo dans les zones à fort trafic. Nous vous offrons une solution pratique pour trouver des points de location de vélos là où vous en avez le plus besoin. Avec Bicycle Maroc, vous pouvez profiter d'une mobilité fluide et efficace dans les endroits les plus fréquentés.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="/bikes">
                        <button class="bg-pr-400 p-2 border-2 border-white rounded-md text-white hover:bg-pr-500 md:me-12 md:mx-12 mx-7 font-bold w-32">BIKES</button>
                    </a>
                    <a href="/contact_us">
                        <button class="border-2 border-pr-400 text-black p-2 rounded-md hover:bg-sec-400 w-32">CONTACT US</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="md:w-3/5 hidden md:block ml-11">
            <img loading="lazy" src="/images/home/HomePic2.webp" alt="home car" class="w-full rounded-3xl shadow-2xl">
        </div>
    </div>
</div>

<!-- Slide 3 -->
<div id="carousel-item-3" class="hidden">
    <div class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
        <div class="flex flex-col md:flex-row md:items-center md:w-3/5 mx-12 md:ms-20 md:mx-0 " >
            <div class="md:w-3/5 md:hidden mr-8">
                <img loading="lazy" src="/images/home/HomePic3.jpg" alt="home car" class="w-full rounded-3xl shadow-2xl">
            </div>
            <div class="max-w-screen-lg md:w-full mx-auto md:text-left md:pl-8">
                <h1 class="md:text-start text-center font-bold text-4xl text-gray-900 mb-8 md:text-7xl">
                    <span class="text-pr-400 font-bold italic">Notre Mission
                </h1>
                <p class="text-justify md:mx-0 mx-8 mb-8">
                    Notre Mission chez Bicycle Maroc est de promouvoir une culture de déplacement durable et communautaire à travers le Maroc. En fournissant un accès facile à la location de vélos, nous encourageons un mode de vie actif et respectueux de l'environnement, tout en renforçant les liens entre les cyclistes.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="/bikes">
                        <button class="bg-pr-400 p-2 border-2 border-white rounded-md text-white hover:bg-pr-500 md:me-12 md:mx-12 mx-7 font-bold w-32">BIKES</button>
                    </a>
                    <a href="/contact_us">
                        <button class="border-2 border-pr-400 text-black p-2 rounded-md hover:bg-sec-400 w-32">CONTACT US</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="md:w-3/5 hidden md:block ml-11">
            <img loading="lazy" src="/images/home/HomePic3.jpg" alt="home car" class="w-full rounded-3xl shadow-2xl">
        </div>
    </div>
</div>
<!-- Add this JavaScript code after your HTML content -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Show only the first slide and hide the rest
        document.getElementById('carousel-item-1').classList.remove('hidden');
        document.getElementById('carousel-item-2').classList.add('hidden');
        document.getElementById('carousel-item-3').classList.add('hidden');

        // Define the carousel object
        const carousel = {
            currentSlide: 1,
            totalSlides: 3, // Update this value to the total number of slides

            prev: function() {
                this.currentSlide = (this.currentSlide === 1) ? this.totalSlides : this.currentSlide - 1;
                this.updateCarousel();
            },

            next: function() {
                this.currentSlide = (this.currentSlide === this.totalSlides) ? 1 : this.currentSlide + 1;
                this.updateCarousel();
            },

            goToSlide: function(slideNumber) {
                this.currentSlide = slideNumber;
                this.updateCarousel();
            },

            updateCarousel: function() {
                // Hide all slides
                for (let i = 1; i <= this.totalSlides; i++) {
                    document.getElementById(`carousel-item-${i}`).classList.add('hidden');
                    document.getElementById(`carousel-indicator-${i}`).setAttribute('aria-current', 'false');
                }

                // Show the current slide
                document.getElementById(`carousel-item-${this.currentSlide}`).classList.remove('hidden');
                document.getElementById(`carousel-item-${this.currentSlide}`).setAttribute('aria-current', 'true');

                // Update the indicator
                for (let i = 1; i <= this.totalSlides; i++) {
                    const indicator = document.getElementById(`carousel-indicator-${i}`);
                    if (i === this.currentSlide) {
                        indicator.classList.remove('bg-gray-500');
                        indicator.classList.add('bg-black');
                        indicator.setAttribute('aria-current', 'true');
                    } else {
                        indicator.classList.remove('bg-black');
                        indicator.classList.add('bg-gray-500');
                        indicator.setAttribute('aria-current', 'false');
                    }
                }
            }
        };

        // Attach event listeners to prev and next buttons
        const $prevButton = document.getElementById('data-carousel-prev');
        const $nextButton = document.getElementById('data-carousel-next');

        $prevButton.addEventListener('click', () => {
            carousel.prev();
        });

        $nextButton.addEventListener('click', () => {
            carousel.next();
        });

        // Attach event listeners to carousel indicators
        const $carouselIndicators = document.querySelectorAll('[data-carousel-slide-to]');
        $carouselIndicators.forEach(indicator => {
            indicator.addEventListener('click', () => {
                const slideNumber = parseInt(indicator.getAttribute('data-carousel-slide-to'));
                carousel.goToSlide(slideNumber);
            });
        });
    });
</script>

    </div>
    </div>
    
          {{-- bikes Section --}}


            <div class="mx-auto max-w-screen-xl">
                <div class="flex align-middle justify-center">
                    <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
                    <p class="my-2 mx-8  p-2 font-bike font-bold text-pr-400 text-lg ">Bikes</p>
                    <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
                    <hr>
                </div>
                <div class="   md:mr-16 mr-4 mb-4 flex justify-end">
                    <a href="/bikes">
                        <button
                            class="border-2 border-pr-400 text-black w-16 p-1 rounded-md hover:bg-pr-400 hover:text-white">See
                            All</button>
                    </a>
                </div>
            </div>

            <div class="mt-6 grid md:grid-cols-3 justify-center items-stretch mx-auto max-w-screen-xl">
                @foreach ($bikes->take(3) as $bike)
                    <div class="m-4 max-w-xs border border-gray-200 flex flex-col">
                        <a href="{{ route('bike.reservation', ['bike' => $bike->id]) }}">
                            <img class="w-full h-60 object-cover object-center" src="{{ $bike->image }}" alt="bike image">
                        </a>
                        <div class="bg-gray-200 p-4 flex-1 flex flex-col justify-between">
                            <div class="text-center">
                                <p class="text-gray-800 text-lg font-extrabold italic">{{ $bike->model }}</p>
                                <div class="flex justify-end mt-2">
                                    <div class="bg-black text-yellow-300 font-bold italic rounded-xl py-1 px-2">Prix: {{ $bike->price_per_hour }} MAD/h</div>
                                </div>
                            </div>
                            <div class="px-4 py-2">
                                <p class="text-gray-600">{{ $bike->description }}</p>
                            </div>
                            <a href="{{ route('bike.reservation', ['bike' => $bike->id]) }}"
                                class="block bg-yellow-300 hover:bg-yellow-400 text-black text-center font-extrabold italic py-2 mt-2 rounded-2xl">Réserver</a>
                        </div>
                    </div>
                @endforeach
            </div>
        
            {{-- Our numbers section --}}
            <div class="mx-auto max-w-screen-xl mt-16 mb-32">
                <div>
                    <h2 class="text-center font-bike text-3xl font-medium text-pr-400">
                        <span class="text-gray-900 font-extrabold italic">Nos Sponsors</span>
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mx-16 max-w-screen-xl">
                    <!-- Sponsor 1 -->
                    <div class="flex justify-center items-center">
                        <img src="/images/logos/Glovo.png" alt="Sponsor 1" class="h-16 md:h-20" />
                    </div>
                    <!-- Sponsor 2 -->
                    <div class="flex justify-center items-center">
                        <img src="/images/logos/Decathlon.png" alt="Sponsor 2" class="h-16 md:h-20" />
                    </div>
                    <!-- Sponsor 3 -->
                    <div class="flex justify-center items-center">
                        <img src="/images/logos/Inwi.png" alt="Sponsor 3" class="h-16 md:h-20" />
                    </div>
                    <!-- Sponsor 4 -->
                    <div class="flex justify-center items-center">
                        <img src="/images/logos/bmce.png" alt="Sponsor 4" class="h-16 md:h-20" />
                    </div>
                    <!-- Sponsor 5 -->
                    <div class="flex justify-center items-center">
                        <img src="/images/logos/Tram1.png" alt="Sponsor 5" class="h-32 md:h-48" />

                    </div>
                </div>
            </div>
            


            {{-- Why us section  --}}
            <div class="mx-auto max-w-screen-xl">
                <div>
                    <h2 class="text-center font-bike text-3xl font-medium text-pr-400">
                        <span class="text-gray-900 font-extrabold italic">Pourquoi nous choisir</span>
                    </h2>
                </div>
                <div class="mt-7 mb-16">
                    <p class="md:text-center text-xl text-justify mx-8">
                        Chez Bicycle Maroc, nous nous engageons à simplifier la mobilité urbaine tout en promouvant un mode de vie sain et durable. Avec une sélection de vélos de qualité et des emplacements pratiques, nous rendons la location de vélos accessible à tous. Rejoignez-nous dans notre mission de transformer les déplacements en une expérience agréable et respectueuse de l'environnement.
                    </p>
                </div>
            
                <!-- Section with small pictures, titles, and descriptions -->
                <!-- Section with small pictures, titles, and descriptions -->
    <div class="grid grid-cols-3 gap-6 mx-8">
        <!-- Item 1 -->
        <div class="flex flex-col items-center justify-center border border-gray-200 rounded-md p-4">
            <img src="/images/logos/Magasin.jpeg" alt="Small Picture 1" class="w-24 h-24 object-cover rounded-full mb-4">
            <div class="text-center">
                <h3 class="text-lg font-bold italic">PROXIMITÉ</h3>
                <p class="text-sm">Profitez de la commodité des spots BicycleMaroc, stratégiquement situés pour rendre vos déplacements plus pratiques et écologiques.</p>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="flex flex-col items-center justify-center border border-gray-200 rounded-md p-4">
            <img src="/images/logos/Cerveau.jpeg" alt="Small Picture 2" class="w-24 h-24 object-cover rounded-full mb-4">
            <div class="text-center">
                <h3 class="text-lg font-bold italic">FLUIDITÉ</h3>
                <p class="text-sm">BicycleMaroc offre une expérience utilisateur fluide et intuitive, permettant à chacun de louer un vélo en quelques clics.</p>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="flex flex-col items-center justify-center border border-gray-200 rounded-md p-4">
            <img src="/images/logos/Mains.jpeg" alt="Small Picture 3" class="w-24 h-24 object-cover rounded-full mb-4">
            <div class="text-center">
                <h3 class="text-lg font-bold italic">ANNULATION GRATUITE</h3>
                <p class="text-sm">Profitez de l'option d'annulation gratuite, vous permettant de réserver en toute confiance, avec la liberté d'annuler votre réservation.</p>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="flex flex-col items-center justify-center border border-gray-200 rounded-md p-4">
            <img src="/images/logos/Telephone.jpeg" alt="Small Picture 4" class="w-24 h-24 object-cover rounded-full mb-4">
            <div class="text-center">
                <h3 class="text-lg font-bold italic">ASSISTANCE CLIENT</h3>
                <p class="text-sm">Bicycle Maroc offre une assistance client 24h/24 et cela pour votre confort total.</p>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="flex flex-col items-center justify-center border border-gray-200 rounded-md p-4">
            <img src="/images/logos/Velos.jpeg" alt="Small Picture 5" class="w-24 h-24 object-cover rounded-full mb-4">
            <div class="text-center">
                <h3 class="text-lg font-bold italic">QUALITÉ INÉGALÉE</h3>
                <p class="text-sm">Profitez de vélos d'une très bonne qualité, grâce à notre sponsor Decathlon.</p>
            </div>
        </div>
        <!-- Item 6 -->
        <div class="flex flex-col items-center justify-center border border-gray-200 rounded-md p-4">
            <img src="/images/logos/Dollar.jpeg" alt="Small Picture 6" class="w-24 h-24 object-cover rounded-full mb-4">
            <div class="text-center">
                <h3 class="text-lg font-bold italic">PRIX ABORDABLES</h3>
                <p class="text-sm">Bicycle Maroc offre des prix abordables et des réductions pour les étudiants et les personnes de moins de 18 ans.</p>
            </div>
        </div>
    </div>
            </div>
            
            

            {{-- Orange bike section --}}
            <div class=" relative -bottom-[1px] mx-auto max-w-screen-xl  ">
                <img loading="lazy" src="/images/bikes/Bike1.png" alt="" class="w-full">
            </div>

        </div>
    </main>
@endsection
