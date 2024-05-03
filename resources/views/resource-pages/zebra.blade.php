<x-app-layout>
    <!-- Header section with information about Zebras -->
    <div class="bg-primary-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-secondary mb-4">Zebras</h1>
            <p class="text-gray-300 text-2xl">
                Zebras are African equines known for their distinctive black and white striped coats. They are closely
                related to horses and donkeys and are primarily found in grassland habitats across Africa.
            </p>
            <p class="text-gray-300 mt-2 text-2xl">
                Zebras are social animals that live in large herds, often consisting of several families led by a
                dominant male. Their stripes serve as a form of camouflage, making it difficult for predators to single
                out individual zebras in a group.
            </p>
        </div>
    </div>

    <!-- Content section with images and details about Zebras -->
    <div class="bg-secondary py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Image and details -->
            <div class="col-span-1 flex justify-end">
                <img src="https://images6.alphacoders.com/420/420990.jpg" alt="Zebra"
                    class="h-96 object-cover rounded-lg shadow-lg ml-8" />
            </div>
            <div class="col-span-1">
                <p class="text-gray-700 leading-relaxed mt-6 text-xl">
                    Zebras are herbivores and primarily graze on grasses. Their digestive systems are specially adapted
                    to break down tough plant material, allowing them to thrive in grassland ecosystems.
                </p>
                <p class="text-gray-700 leading-relaxed mt-1 text-xl">
                    The conservation status of zebras varies depending on the species. While some populations are
                    stable, others are threatened by habitat loss, poaching, and competition with livestock for
                    resources.
                </p>
            </div>
        </div>
    </div>

    <!-- Additional content section -->
    <div class="bg-secondary py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Image and details -->
            <div class="col-span-1 flex justify-end">
                <img src="https://s1.1zoom.me/b5452/47/Zebras_Two_Grass_563134_1920x1080.jpg" alt="Zebra"
                    class="h-96 object-cover rounded-lg shadow-lg ml-8" />
            </div>
            <div class="col-span-1">
                <p class="text-gray-700 leading-relaxed mt-6 text-xl">
                    Zebras communicate using a variety of vocalizations, body postures, and facial expressions. They
                    rely on these signals to maintain social bonds within their herds and to coordinate group movements.
                </p>
                <p class="text-gray-700 leading-relaxed mt-1 text-xl">
                    Despite their resemblance to horses, zebras have never been successfully domesticated. Their
                    unpredictable behavior and strong herding instincts make them difficult to train for human use.
                </p>
            </div>
        </div>
    </div>

    <!-- Key facts section -->
    <div class="bg-primary-200 py-8 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-4">Key Facts</h2>
            <ul class="list-disc list-inside text-gray-300 text-xl">
                <li>Scientific Name: Equus zebra</li>
                <li>Habitat: Grasslands and savannas of Africa</li>
                <li>Diet: Primarily grasses</li>
                <li>Size: Varies by species, ranging from 4.5 to 9 feet long</li>
                <li>Weight: Varies by species, ranging from 440 to 990 pounds</li>
                <li>Gestation: Around 12 months</li>
                <li>Life span: Up to 25 years in the wild</li>
            </ul>
        </div>
    </div>

    <!-- image section -->
    <div class="bg-secondary pt-10"></div>
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4 bg-secondary pb-10">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://cdn.mos.cms.futurecdn.net/HjFE8NKWuCmgfHCcndJ3rK-1200-80.jpg" alt="Zebra">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://www.workingabroad.com/wp-content/uploads/2018/11/zebra_shamwari-scaled.jpg" alt="Zebra">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
            src="https://www.workingabroad.com/wp-content/uploads/2018/10/kariega_zebra_mother_baby-scaled.jpg"
            alt="Zebra">
    </div>
</x-app-layout>
