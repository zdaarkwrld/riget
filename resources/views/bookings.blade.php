<!-- This is the layout for displaying bookings -->
<x-app-layout>
    <section class="relative z-40 overflow-hidden bg-secondary py-8 md:py-12 lg:py-16 px-4 md:px-8">
        <div class="container mx-auto flex justify-center">
            <div class="w-full lg:w-3/4">
                <div class="text-center lg:text-left">
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold leading-tight text-primary mb-6 lg:mb-2">My
                        Bookings</h2>
                    <div class="mb-24 mt-14"> <!-- Adjusted margin here -->

                        <div class="overflow-x-auto">
                            <table class="table-auto border border-black border-collapse w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 text-black font-bold border border-black">Room</th>
                                        <th class="px-4 py-2 text-black font-bold border border-black">Name</th>
                                        <th class="px-4 py-2 text-black font-bold border border-black">Email</th>
                                        <th class="px-4 py-2 text-black font-bold border border-black">Hotel</th>
                                        <th class="px-4 py-2 text-black font-bold border border-black">Date</th>
                                        <th class="px-4 py-2 text-black font-bold border border-black">Time</th>
                                        <th class="px-4 py-2 text-black font-bold border border-black">Total Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through each booking and display its details -->
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td class="border border-black px-4 py-2">{{ $booking->id }}</td>
                                            <td class="border border-black px-4 py-2">{{ $booking->name }}</td>
                                            <td class="border border-black px-4 py-2">{{ $booking->email }}</td>
                                            <td class="border border-black px-4 py-2">{{ $booking->hotel }}</td>
                                            <td class="border border-black px-4 py-2">{{ $booking->date }}</td>
                                            <td class="border border-black px-4 py-2">{{ $booking->time }}</td>
                                            <td class="border border-black px-4 py-2">{{ $booking->total_cost }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
