<x-app-layout>
    <!-- Header section with information about Sumatran Tigers -->
    <div class="bg-primary-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-secondary mb-4">Sumatran Tiger</h1>
            <p class="text-gray-300 text-2xl">
                Sumatran tigers are classified on the IUCN Red List as Critically Endangered with less than 400
                individuals left in the wild of Sumatra, Indonesia.
            </p>
            <p class="text-gray-300 mt-2 text-2xl">
                The smallest of the sub-species, they hide and travel at dawn and dusk in hope to hunt in crop areas and
                outskirts of the forest. Male Sumatran tigers have particularly long fur around the face, giving them a
                distinctive masked appearance.
            </p>
        </div>
    </div>

    <!-- Content section with images and details about Sumatran Tigers -->
    <div class="bg-secondary py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Image and details -->
            <div class="col-span-1 md:order-2">
                <p class="text-gray-700 leading-relaxed mt-6 text-xl">
                    An apex predator, tigers are carnivorous and their diet consists of ungulates such as deer, wild
                    pigs, and bovids. They typically hunt at night, stalking their prey and ambushing it from behind,
                    killing it with a bite to the neck.
                </p>
                <p class="text-gray-700 leading-relaxed mt-1 text-xl">
                    The main threats to Sumatran tigers in the wild include poaching for skins and body parts, depletion
                    of prey species due to habitat loss, habitat fragmentation, where tigers and humans are encroaching
                    areas towards each other. Natural factors such as inbreeding and loss of habitat due to palm oil
                    expansion, movement, and hunting of tiger prey species.
                </p>
            </div>
            <!-- Image -->
            <div class="col-span-1 md:order-1 flex justify-center md:justify-end">
                <img src="https://t4.ftcdn.net/jpg/02/28/74/03/360_F_228740321_GOqRH2S8swb7aUgBbV2slahcsNwRQHUW.jpg"
                    alt="Sumatran Tiger" class="h-auto md:h-96 object-cover rounded-lg shadow-lg md:ml-8 md:mr-0" />
                <!-- Updated class here -->
            </div>
        </div>
    </div>

    <!-- Additional content section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Image and details -->
        <div class="col-span-1 md:order-2 flex justify-center md:justify-start"> <!-- Switched position -->
            <img src="https://i.natgeofe.com/k/1d33938b-3d02-4773-91e3-70b113c3b8c7/lion-male-roar_3x2.jpg?wp=1&w=1084.125&h=721.875"
                alt="Sumatran Tiger" class="h-auto md:h-96 object-cover rounded-lg shadow-lg md:mr-8 md:ml-0" /> <!-- Updated class here -->
        </div>
        <!-- Details -->
        <div class="col-span-1 md:order-1"> <!-- Switched position -->
            <p class="text-gray-700 leading-relaxed mt-6 text-xl">
                According to a survey from "TRAFFIC", the global wildlife trade monitoring network, poaching for
                skins
                is responsible for over 70% of all reported Sumatran tiger deaths, amounting to at least 40 animals
                per
                year.
            </p>
            <p class="text-gray-700 leading-relaxed mt-1 text-xl">
                Key to helping protect Sumatran tigers and a critical part of Battersea's conservation system, are
                the
                working together to help protect the species, we can protect the habitats from human disturbance
                such as
                deforestation, which is currently resulting in serious loss of wild habitat and prey species for
                wild
                Sumatran tigers.
            </p>
        </div>
    </div>

    <!-- Key facts section -->
    <div class="bg-primary-200 py-8 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-4">Key Facts</h2>
            <ul class="list-disc list-inside text-gray-300 text-xl">
                <li>Conservation Status: Critically Endangered</li>
                <li>Distribution: Sumatra, Indonesia</li>
                <li>Habitat: Tropical broadleaf evergreen forests, freshwater swamp forests and peat swamps</li>
                <li>Diet: Primarily hoofed animals</li>
                <li>Height: up to 0.9m</li>
                <li>Weight: 100-300 pounds</li>
                <li>Gestation: 3.5 months</li>
                <li>Size of group: 2-3</li>
                <li>Life span: 10-20 years</li>
            </ul>
        </div>
    </div>

    <!-- image section -->
    <div class="bg-secondary pt-10"></div>
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4 bg-secondary pb-10">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://t4.ftcdn.net/jpg/02/28/74/03/360_F_228740321_GOqRH2S8swb7aUgBbV2slahcsNwRQHUW.jpg"
            alt="image description">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://images.musement.com/cover/0161/64/thumb_16063601_cover_header.jpg?w=540"
            alt="image description">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://t4.ftcdn.net/jpg/06/87/25/23/360_F_687252318_nA5K0HLStrP9zyaefmjtOUtd1iy7eaLC.jpg"
            alt="image description">
    </div>
</x-app-layout>
