<x-app-layout>
    <!-- Header section with information about Penguins -->
    <div class="bg-primary-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-secondary mb-4">Penguins</h1>
            <p class="text-gray-300 text-2xl">
                Penguins are flightless seabirds that are highly adapted for life in the water. They are found almost
                exclusively in the Southern Hemisphere, with only one species, the Galapagos penguin, found north of the
                equator.
            </p>
            <p class="text-gray-300 mt-2 text-2xl">
                Penguins feed on a variety of marine animals, including fish, squid, and krill. They have streamlined
                bodies and flipper-like wings that allow them to swim at incredible speeds underwater.
            </p>
        </div>
    </div>

    <!-- Content section with images and details about Penguins -->
    <div class="bg-secondary py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Image and details -->
            <div class="col-span-1 flex justify-end">
                <img src="https://w.forfun.com/fetch/bf/bf2ea7cd02194532571ab3cc61a85690.jpeg" alt="Penguins"
                    class="h-96 object-cover rounded-lg shadow-lg ml-8" />
            </div>
            <div class="col-span-1">
                <p class="text-gray-700 leading-relaxed mt-6 text-xl">
                    According to a survey from the Antarctic and Southern Ocean Coalition, climate change and habitat
                    destruction are the biggest threats to penguins. Loss of sea ice and changes in ocean temperatures
                    can have a significant impact on their food sources.
                </p>
                <p class="text-gray-700 leading-relaxed mt-1 text-xl">
                    Conservation efforts are crucial for the survival of penguin species. This includes protecting their
                    breeding grounds, establishing marine protected areas, and reducing pollution in their habitats.
                </p>
            </div>
        </div>
    </div>

    <!-- Additional content section -->
    <div class="bg-secondary py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Image and details -->
            <div class="col-span-1 flex justify-end">
                <img src="https://i.pinimg.com/originals/3b/e3/8e/3be38e6f5dcdbbf1bee0ab9a95fd4ed0.jpg" alt="Penguins"
                    class="h-96 object-cover rounded-lg shadow-lg ml-8" />
            </div>
            <div class="col-span-1">
                <p class="text-gray-700 leading-relaxed mt-6 text-xl">
                    Penguins are fascinating creatures known for their distinctive black and white coloration and their
                    remarkable adaptation to aquatic life.
                </p>
                <p class="text-gray-700 leading-relaxed mt-1 text-xl">
                    They spend much of their time at sea, where they are agile swimmers and efficient hunters. Some
                    species of penguins can dive to impressive depths in search of food.
                </p>
            </div>
        </div>
    </div>

    <!-- Key facts section -->
    <div class="bg-primary-200 py-8 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-4">Key Facts</h2>
            <ul class="list-disc list-inside text-gray-300 text-xl">
                <li>Number of species: 18</li>
                <li>Family: Spheniscidae</li>
                <li>Habitat: Mostly cold waters of the Southern Hemisphere</li>
                <li>Diet: Fish, squid, and krill</li>
                <li>Height: Varies by species, ranging from 10 to 45 inches</li>
                <li>Weight: Varies by species, ranging from 2 to 100 pounds</li>
                <li>Life span: Varies by species, ranging from 15 to 20 years</li>
            </ul>
        </div>
    </div>

    <!-- image section -->
    <div class="bg-secondary pt-10"></div>
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4 bg-secondary pb-10">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://images.trustinnews.pt/uploads/sites/5/2019/10/ha-milhoes-de-anos-havia-pinguins-do-tamanho-do-homem-2-1024x640.jpg"
            alt="image description">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://cdn-images.rtp.pt/EPG/imagens/42684_66300_77531.jpg?amp;w=160" alt="image description">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://www.treehugger.com/thmb/0perV9dlNRIGUokYUyX_wYzJU9E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-960007644-5b1f1f6e041441a685d8d7bcaa8d2ae0.jpg"
            alt="image description">
    </div>
</x-app-layout>
