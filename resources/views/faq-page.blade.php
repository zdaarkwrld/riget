<x-app-layout>
    <!-- Section for frequently asked questions -->
    <section class="py-10 bg-secondary sm:py-16 lg:py-24">
        <!-- Container for the content -->
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl mb-20">
            <!-- Title section -->
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    Explore Common Questions
                </h2>
            </div>
            <!-- FAQ items -->
            <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
                <!-- FAQ item 1 -->
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <!-- Question button -->
                    <button type="button" id="question1" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">How to book tickets for the zoo?</span>
                        <!-- Arrow icon -->
                        <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Answer section -->
                    <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <!-- Answer text -->
                        <p>To book tickets and/or hotel, you can just access the booking system from the navigation bar
                            and fill out the form.</p>
                    </div>
                </div>
                <!-- FAQ item 2 -->
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question2" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">How to access the loyalty discount?</span>
                        <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>To access the loyalty discount, contact RZA through the website on our Contact Us page.</p>
                    </div>
                </div>
                <!-- FAQ item 3 -->
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question3" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">How do I know where I am located in the
                            zoo?</span>
                        <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>You can access the zoo map on the resource page.</p>
                    </div>
                </div>
                <!-- FAQ item 4 -->
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question4" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">Do I have access to support?</span>
                        <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Yes, you can cancel your subscription at any time without any hidden fees. We believe in
                            providing a hassle-free experience for our users.</p>
                    </div>
                </div>
                <!-- FAQ item 5 -->
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question5" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">How much do I pay to visit the zoo?</span>
                        <svg id="arrow5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer5" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>There are 2 services: Safari Style Wildlife Zoo ($22.99) and Educational Visit ($18.99). You
                            can also book our hotel if needed ($70.99).</p>
                    </div>
                </div>

                <!-- FAQ item 6 -->


                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question5" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">How to resize text and pages?</span>
                        <svg id="arrow5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer5" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>To zoom in or out you can go to your browser settings and go to accessibility and turn on
                            Show zoom </p>
                    </div>
                </div>
                <!-- Contact support link -->
                <p class="text-center text-gray-600 textbase mt-9">
                    Still have questions?
                    <!-- Contact support link -->
                    <a href="{{ route('contact-us') }}"
                        class="cursor-pointer font-medium text-primary transition-all duration-200 hover:text-tertiary focus:text-tertiary hover-underline">
                        <span>Contact our support</span>
                    </a>
                </p>
            </div>
            <!-- JavaScript to toggle the answers and rotate the arrows -->
            <script>
                document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
                    button.addEventListener('click', function() {
                        var answer = document.getElementById('answer' + (index + 1));
                        var arrow = document.getElementById('arrow' + (index + 1));

                        if (answer.style.display === 'none' || answer.style.display === '') {
                            answer.style.display = 'block';
                            arrow.style.transform = 'rotate(0deg)';
                        } else {
                            answer.style.display = 'none';
                            arrow.style.transform = 'rotate(-180deg)';
                        }
                    });
                });
            </script>
    </section>
</x-app-layout>
