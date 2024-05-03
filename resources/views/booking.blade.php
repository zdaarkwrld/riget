<x-app-layout>
    <!-- Header Section -->
    <div class="max-w-7xl mx-auto mt-10 bg-secondary shadow-2xl rounded-lg overflow-hidden mb-20">
        <div class="text-2xl py-4 px-6 bg-primary text-white text-center font-bold uppercase border-primary">
            Book an Appointment
        </div>
        <!-- Appointment Form -->
        <form class="py-4 px-6" action="{{ route('booking.add') }}" method="POST">
            @csrf
            <!-- Name Input -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name
                </label>
                <input required name="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Enter your name">
            </div>
            <!-- Email Input -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input required name="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Enter your email">
            </div>
            <!-- Phone Number Input -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">
                    Phone Number
                </label>
                <input required name="phone"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="phone" type="number" placeholder="Enter your phone number">
            </div>
            <!-- Date Input -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="date">
                    Date
                </label>
                <input required name="date"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="date" type="date" placeholder="Select a date">
            </div>
            <!-- Time Input -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="time">
                    Time
                </label>
                <input required name="time"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="time" type="time" placeholder="Select a time">
            </div>
            <!-- Service Selection -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="service">
                    Service
                </label>
                <select required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="service" name="service_id">
                    <option value="1">Safari style wildlife zoo</option>
                    <option value="2">Educational Visit</option>
                </select>
            </div>
            <!-- Hotel Checkbox -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">
                    On site hotel
                </label>
                <div class="flex items-center">
                    <input type="checkbox" name="hotel" class="mr-2" id="hotel">
                    <label for="hotel">Check if you want to book an on-site hotel</label>
                </div>
            </div>
            <!-- Message Textarea -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="message">
                    Message
                </label>
                <textarea name="message"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" rows="4" placeholder="Enter any additional information"></textarea>
            </div>
            <!-- Submit Button -->
            <div class="flex items-center justify-center mb-4">
                <button
                    class="bg-primary text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                    type="submit">
                    Book Appointment
                </button>
            </div>
        </form>
    </div>
    <!-- JavaScript Import -->
    <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>

    <!-- Services Section -->
    <div class="sm:flex sm:flex-col sm:align-center bg-primary p-10 mb-10">
        <h1 class="text-4xl font-bold  text-white text-center">Our Services</h1>
        <!-- Service Cards -->
        <div class="mt-12 space-y-3 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-6 md:max-w-5xl md:mx-auto xl:grid-cols-3">
            <!-- Safari Style Wildlife Zoo -->
            <div class="border border-slate-200 rounded-lg shadow-sm divide-y divide-slate-200 bg-white">
                <div class="p-6 bg-white">
                    <h2 class="text-xl leading-6 font-bold text-slate-900 ">Safari Style Wildlife Zoo</h2>
                    <p class="mt-2 text-base text-slate-700 leading-tight">For new makers who want to fine-tune and test an
                        idea.</p>
                    <p class="mt-8">
                        <span class="text-4xl font-bold text-slate-900 tracking-tighter">$22.99</span>
                    </p>
                </div>
                <div class="pt-6 pb-8 px-6 bg-white">
                    <h3 class="text-sm font-bold text-slate-900 tracking-wide uppercase">What's included</h3>
                    <ul role="list" class="mt-4 space-y-3">
                        <li class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-green-400" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span class="text-base text-slate-700">Trip to the zoo </span>
                        </li>
                        <li class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-green-400" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span class="text-base text-slate-700">You can buy foods and beverages</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Educational Visit -->
            <div class="border border-slate-200 rounded-lg shadow-sm divide-y divide-slate-200 bg-white">
                <div class="p-6 bg-white">
                    <h2 class="text-xl leading-6 font-bold text-slate-900">Educational Visit</h2>
                    <p class="mt-2 text-base text-slate-700 leading-tight">For creators with multiple ideas who want to
                        efficiently test and refine them.</p>
                    <p class="mt-8">
                        <span class="text-4xl font-bold text-slate-900 tracking-tighter">$18.99</span>
                    </p>
                </div>
                <div class="pt-6 pb-8 px-6 bg-white">
                    <h3 class="text-sm font-bold text-slate-900 tracking-wide uppercase">What's included</h3>
                    <ul role="list" class="mt-4 space-y-3">
                        <li class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-green-400" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span class="text-base text-slate-700">Cheaper prices </span>
                        </li>
                        <li class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-5 w-5 text-green-400" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span class="text-base text-slate-700">Visit the zoo with your schoolmates</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- On Site Hotel -->
            <div class="border border-slate-200 rounded-lg shadow-sm divide-y divide-slate-200 bg-white">
                <div class="p-6 bg-white">
                    <h2 class="text-xl leading-6 font-bold text-slate-900">On Site Hotel</h2>
                    <p class="mt-2 text-base text-slate-700 leading-tight">You can stay for more days and book our hotel</p>
                    <p class="mt-8">
                        <span class="text-4xl font-bold text-slate-900 tracking-tighter">$70.99/night</span>
                    </p>
                </div>

                <div class="pt-6 pb-8 px-6 bg-white"></div>
            </div>
        </div>
    </div>
</x-app-layout>
