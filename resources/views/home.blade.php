<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Background image with text -->
    <div <div
        class="bg-[url('/public/images/giraffe.jpg')] rounded-bl-[40%_100px] rounded-br-[60%_100px] bg-center  bg-cover overflow-hidden h-[300px] sm:h-[400px] md:h-[600px] relative  ">
        <!-- Animated text -->
        <div
            class="absolute top-5 left-3 p-4 transition-all duration-1000 ease-in-out transform translate-y-[-100%] opacity-0 animate-fade-in">
            <h2 class=" text-white text-5xl font-bold font-therifleman bg-primary rounded-md px-5 py-5 ">
                Welcome to
                <br>Riget Zoo Adventures
            </h2>
        </div>
    </div>

    <!-- Fade-in animation styles -->
    <style>
        .animate-fade-in {
            animation: fade-in 1.5s ease-in-out forwards;
        }

        @keyframes fade-in {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

    <!-- Event cards section -->
    <div
        class="bg-secondary text-gray-800 py-12 md:py-12 opacity-0 transform translate-x-[-50%] transition-all duration-1000 ease-in-out animate-fade-in-left">
        <div class="container mx-auto px-4">
            <h1
                class="font-black text-center  text-2xl md:text-4xl lg:text-5xl pb-3 font-therifleman text-primary">
                Discover Our Updated Events</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 md:mt-12">
                <!-- Event card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://www.wmsp.co.uk/fileadmin/_processed_/5/7/csm_photo-minibus2-600px_3f8bd75a8f.jpg"
                        alt="Headless UI"
                        class="w-full h-64 md:h-80 lg:h-96 object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150">
                    <div class="p-4 md:p-6 lg:p-8">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-primary mb-2">Book A Guided Tour
                        </h3>
                        <p class="text-black mb-4 two-lines md:mb-6 lg:mb-8">Book tickets to visit our animal friends .</p>
                    </div>
                </div>
                <!-- Event card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://www.wmsp.co.uk/fileadmin/user_upload/west_midland_safari_park/attractions/elephant-04.jpg"
                        alt="Heroicons"
                        class="w-full h-64 md:h-80 lg:h-96 object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150">
                    <div class="p-4 md:p-6 lg:p-8">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-primary mb-2">Get Ready To Visit
                            Our Animal Friends</h3>
                        <p class="text-black mb-4 two-lines md:mb-6 lg:mb-8">Explore our zoo and learn more about animals.</p>
                    </div>
                </div>
                <!-- Event card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/loyalty-program-img-3.jpeg') }}" alt="Hero Patterns"
                        class="w-full h-64 md:h-80 lg:h-96 object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150">
                    <div class="p-4 md:p-6 lg:p-8">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-primary mb-2">Discover Our Loyalty
                            Offer</h3>
                        <p class="text-black mb-4 two-lines md:mb-6 lg:mb-8">Contact Us through our website if you want to know more about our loyalty program.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fade-in-left animation styles -->
    <style>
        .animate-fade-in-left {
            animation: fade-in-left 1s ease-in-out forwards;
        }

        @keyframes fade-in-left {
            0% {
                opacity: 0;
                transform: translateX(-50%);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>

    <!-- Photo gallery section -->
    <h1
        class=" font-black text-center text-3xl md:text-5xl lg:text-6xl pb-6 pt-10 font-therifleman bg-secondary text-primary">
        Our Photo Library</h1>

    <div class="flex flex-wrap justify-center bg-secondary">
        <div class="flex flex-wrap justify-center">
            <div class="flex flex-wrap justify-center w-full md:w-3/4 lg:w-2/3">
                <!-- Photo 1 -->
                <img class="h-64 md:h-96 w-1/3 md:w-1/3 lg:w-1/3 p-2 object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://scontent-hel3-1.cdninstagram.com/v/t51.29350-15/434401989_330881949974671_2330653325018811586_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=18de74&_nc_ohc=YJ4-2eaj0lIAb469NhZ&_nc_ht=scontent-hel3-1.cdninstagram.com&edm=ANo9K5cEAAAA&oh=00_AfCfRO0jXGG92y7T5Vyio40JQReJwHlRgkFMzQ802P81tA&oe=6627C0A0"
                    alt="image description">

                <!-- Photo 2 -->
                <img class="h-64 md:h-96 w-1/3 md:w-1/3 lg:w-1/3 p-2 object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://scontent-hel3-1.cdninstagram.com/v/t51.2885-15/435805331_445412711333796_9016356162733763026_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=18de74&_nc_ohc=bYZSLtdLQZ8Ab5hiCbE&_nc_ht=scontent-hel3-1.cdninstagram.com&edm=ANo9K5cEAAAA&oh=00_AfDx_X4oSI5Gw0eoMhVoq3zjqiWzfZ6qaCGgCalOIfgJmA&oe=6627D0DF"
                    alt="image description">

                <!-- Photo 3 -->
                <img class="h-64 md:h-96 w-1/3 md:w-1/3 lg:w-1/3 p-2 object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://scontent-hel3-1.cdninstagram.com/v/t51.2885-15/434418849_404019415584549_8647228025444252350_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=B5YIjxoR4e4Ab4VROP4&_nc_ht=scontent-hel3-1.cdninstagram.com&edm=ANo9K5cEAAAA&oh=00_AfD1BVGNV_r6NDaUhui-PwOAlTcy3wQCclLvQveu3INQlQ&oe=6627CB0B"
                    alt="image description">
            </div>

            <div class="flex flex-wrap justify-center w-full md:w-3/4 lg:w-2/3">
                <!-- Photo 4 -->
                <img class="h-64 md:h-96 w-1/3 md:w-1/3 lg:w-1/3 p-2 object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://media.npr.org/assets/img/2022/01/07/gettyimages-1236518014_slide-2878f3ed75d104b1052d52883d3e4305daf52b25-s1100-c50.jpg"
                    alt="image description">

                <!-- Photo 5 -->
                <img class="h-64 md:h-96 w-1/3 md:w-1/3 lg:w-1/3 p-2 object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://www.chesterzoo.org/news/record-breaking-animal-numbers/new-figures-reveal-chester-zoo-is-home-to-a-record-35-thousand-animals-17-pictured_red-panda-cubs/"
                    alt="image description">

                <!-- Photo 6 -->
                <img class="h-64 md:h-96 w-1/3 md:w-1/3 lg:w-1/3 p-2 mb-16 object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://media.glamour.com/photos/582287a941cb2f416b12461f/master/w_2560%2Cc_limit/GettyImages-475182333.jpg"
                    alt="image description">
            </div>
        </div>

    </div>

    <div class="pb-20 bg-secondary">
    </div>

    <!-- Contact section -->
    <section class="relative z-40 overflow-hidden bg-primary py-12 md:py-16 lg:py-24 px-4 md:px-8">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="text-center lg:text-left">
                        <div class="mb-10 lg:mb-0 opacity-0 animate-fade-in"> <!-- Apply class here -->
                            <h1
                                class="mt-0 mb-3 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-secondary">
                                You come here often? Fantastic, Contact Us to get a loyalty offer to reduce your ticket
                                prices
                            </h1>
                            <p class="w-full text-base md:text-lg lg:text-xl font-medium leading-relaxed text-white">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background shapes -->
        <div class="absolute top-0 right-0 -z-10">
            <svg width="388" height="250" viewBox="0 0 388 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z"
                    fill="url(#paint0_linear_971_6910)"></path>
                <defs>
                    <linearGradient id="paint0_linear_971_6910" x1="60.5" y1="111" x2="287"
                        y2="111" gradientUnits="userSpaceOnUse">
                        <stop offset="0.520507" stop-color="white"></stop>
                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="absolute top-0 right-0 -z-10 ">
            <svg width="324" height="250" viewBox="0 0 324 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z"
                    fill="url(#paint0_linear_971_6911)"></path>
                <defs>
                    <linearGradient id="paint0_linear_971_6911" x1="60.5" y1="111" x2="287"
                        y2="111" gradientUnits="userSpaceOnUse">
                        <stop offset="0.520507" stop-color="white"></stop>
                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="absolute top-4 left-4 -z-10  ">
            <svg width="43" height="56" viewBox="0 0 43 56" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5">
                    <circle cx="40.9984" cy="1.49626" r="1.49626" transform="rotate(90 40.9984 1.49626)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="1.49626" r="1.49626" transform="rotate(90 27.8304 1.49626)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="1.49626" r="1.49626" transform="rotate(90 14.6644 1.49626)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="1.49626" r="1.49626" transform="rotate(90 1.49642 1.49626)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="14.6642" r="1.49626" transform="rotate(90 40.9984 14.6642)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="14.6642" r="1.49626" transform="rotate(90 27.8304 14.6642)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="14.6642" r="1.49626" transform="rotate(90 14.6644 14.6642)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="14.6642" r="1.49626" transform="rotate(90 1.49642 14.6642)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="27.8302" r="1.49626" transform="rotate(90 40.9984 27.8302)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="27.8302" r="1.49626" transform="rotate(90 27.8304 27.8302)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="27.8302" r="1.49626" transform="rotate(90 14.6644 27.8302)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="27.8302" r="1.49626" transform="rotate(90 1.49642 27.8302)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="40.9982" r="1.49626" transform="rotate(90 40.9984 40.9982)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="40.9963" r="1.49626" transform="rotate(90 27.8304 40.9963)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="40.9982" r="1.49626" transform="rotate(90 14.6644 40.9982)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="40.9963" r="1.49626" transform="rotate(90 1.49642 40.9963)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="54.1642" r="1.49626" transform="rotate(90 40.9984 54.1642)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="54.1642" r="1.49626" transform="rotate(90 27.8304 54.1642)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="54.1642" r="1.49626" transform="rotate(90 14.6644 54.1642)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="54.1642" r="1.49626" transform="rotate(90 1.49642 54.1642)"
                        fill="white"></circle>
                </g>
            </svg>
        </div>
    </section>

    <!-- Slide-in animation styles -->
    <style>
        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateX(-50px);
                /* Start from left */
            }

            100% {
                opacity: 1;
                transform: translateX(0);
                /* End at original position */
            }
        }

        .animate-slide-in {
            animation: slide-in 0.5s ease-out forwards;
        }
    </style>

    <div class="bg-secondary py-10">
    </div>

    <!-- About section -->
    <div class="flex flex-col items-center justify-center bg-primary py-16 ">
        <div class="relative">
            <img src="https://www.calgaryzoo.com/wp-content/uploads/2023/09/Daughter.YYC_.Zoo_.P.Bears_.01090.1.FF16-1024x768.jpg"
                alt="Panda" class="rounded-full w-64 h-64">
        </div>
        <h1 class="text-4xl font-bold text-secondary mt-8">Riget Zoo Adventures</h1>
        <p class="text-lg text-white mt-4 max-w-2xl text-center">
            Riget Zoo Adventures is a fascinating place to explore with 15 acres of open plan zoo. It's home to over 500
            animals from all over the world, including endangered species.
        </p>
        <button class="bg-secondary-200 hover:bg-secondary text-primary font-bold py-2 px-4 rounded mt-8">
            OUR FRIENDLY ANIMALS
        </button>
    </div>

    <!DOCTYPE html>
    <html lang="en">






    <body class="bg-gray-100">
        <!-- Testimonials section -->
        <section class="px-4 py-4 md:py-24 bg-secondary">
            <div class="max-w-screen-xl mx-auto">
                <h2 class="font-black text-primary text-center text-3xl leading-none uppercase mx-auto mb-12">What
                    Listeners Are Saying</h2>
                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4 relative">
                    <!-- Testimonial 1 -->
                    <div class="bg-primary rounded-lg p-8 text-center md:w-1/3">
                        <p class="font-bold uppercase text-white">John Doe</p>
                        <p class="text-xl font-light italic text-secondary">We had an amazing day at the zoo! The
                            exhibits were well-designed and allowed us to get up close and personal with the animals.
                            The gorilla exhibit was our favorite – we could have spent hours watching their fascinating
                            behavior. Highly recommend this zoo for a fun and educational family outing.!</p>
                        <div class="flex items-center justify-center space-x-2 mt-4">
                            <!-- 5 Star Rating -->
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="bg-primary rounded-lg p-8 text-center md:w-1/3">
                        <p class="font-bold uppercase text-white">Jane Smith</p>
                        <p class="text-xl font-light italic text-secondary">This zoo is a must-visit for anyone who
                            loves animals! The staff was incredibly knowledgeable and passionate about the animals they
                            care for. We attended a couple of the keeper talks, which were both informative and
                            entertaining. The zoo grounds are beautifully maintained, and there are plenty of shaded
                            areas to take a break. We'll definitely be back!!</p>
                        <div class="flex items-center justify-center space-x-2 mt-4">
                            <!-- 5 Star Rating -->
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="bg-primary rounded-lg p-8 text-center md:w-1/3">
                        <p class="font-bold uppercase text-white">Emily Johnson</p>
                        <p class="text-xl font-light italic text-secondary">We had a fantastic time at the zoo! The
                            petting zoo was a hit with our little ones, and they loved getting up close and personal
                            with the friendly goats and sheep. The carousel and train rides were also a lot of fun. The
                            zoo did a great job of catering to families with young children while still providing an
                            excellent experience for everyone.</p>
                        <div class="flex items-center justify-center space-x-2 mt-4">
                            <!-- 5 Star Rating -->
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" stroke="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>

</x-app-layout>
