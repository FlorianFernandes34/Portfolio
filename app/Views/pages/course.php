<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="max-w-6xl mx-auto px-6 mt-32 mb-40">

    <!-- TITRE -->
    <header class="text-center mb-32">
        <h1 class="text-4xl font-semibold mb-6">Parcours</h1>
        <p class="text-muted max-w-2xl mx-auto">
            Voici les grandes étapes de mon parcours, de la découverte de l'informatique à aujourd'hui.
        </p>
    </header>

    <!-- TIMELINE -->
    <div class="relative">

        <!-- FIL CENTRAL -->
        <div class="absolute left-1/2 top-0 bottom-0 w-[2px] bg-gray-300 -translate-x-1/2"></div>

        <div class="flex flex-col space-y-32">

            <!-- ITEM 1 - GAUCHE -->
            <div class="relative md:grid md:grid-cols-9 md:items-center">
                <!-- Texte gauche -->
                <div class="md:col-span-4 md:text-right md:pr-16 relative">
                    <div class="md:absolute md:right-0 md:top-1/2 md:-translate-y-1/2 md:w-[50%] md:border-r md:border-gray-300"></div>
                    <time class="text-sm text-gray-500">2024 — Aujourd’hui</time>
                    <h2 class="text-xl font-medium mt-2 mb-4">BTS SIO — Option SLAM</h2>
                    <p class="text-gray-700">
                        Cette formation me permet de renforcer mes compétences en développement web, desktop et mobile, ainsi que d'en acquérir
                        en gestion de projet et en milieu professionnel.
                    </p>
                </div>

                <!-- Point central -->
                <div class="col-span-1 flex justify-center relative z-10">
                    <span class="w-5 h-5 bg-black border-2 border-white rounded-full shadow-lg"></span>
                </div>

                <!-- Espace droite -->
                <div class="md:col-span-4"></div>
            </div>

            <!-- ITEM 2 - DROITE -->
            <div class="relative md:grid md:grid-cols-9 md:items-center">

                <!-- Espace gauche -->
                <div class="md:col-span-4"></div>

                <!-- Point central -->
                <div class="col-span-1 flex justify-center relative z-10">
                    <span class="w-5 h-5 bg-black border-2 border-white rounded-full shadow-lg"></span>
                </div>

                <!-- Texte droite -->
                <div class="md:col-span-4 md:pl-16 relative">
                    <div class="md:absolute md:left-0 md:top-1/2 md:-translate-y-1/2 md:w-[50%] md:border-l md:border-gray-300"></div>
                    <time class="text-sm text-gray-500">2021 — 2024</time>
                    <h2 class="text-xl font-medium mt-2 mb-4">Bac Pro Maintenance des Véhicules</h2>
                    <p class="text-gray-700">
                        Cette formation m'a permis de renforcer ma rigueur et ma logique, tout en confirmant mon intérêt pour l'informatique.
                    </p>
                </div>
            </div>

            <!-- ITEM 3 - GAUCHE -->
            <div class="relative md:grid md:grid-cols-9 md:items-center">
                <!-- Texte gauche -->
                <div class="md:col-span-4 md:text-right md:pr-16 relative">
                    <div class="md:absolute md:right-0 md:top-1/2 md:-translate-y-1/2 md:w-[50%] md:border-r md:border-gray-300"></div>
                    <time class="text-sm text-gray-500">2017 — 2021</time>
                    <h2 class="text-xl font-medium mt-2 mb-4">Découverte de l’informatique</h2>
                    <p class="text-gray-700">
                        Mes premiers contacts avec l'informatique au collège. Années durant lesquelles j'ai progressivement dévellopé un attrait pour ce milieu.
                    </p>
                </div>

                <!-- Point central -->
                <div class="col-span-1 flex justify-center relative z-10">
                    <span class="w-5 h-5 bg-black border-2 border-white rounded-full shadow-lg"></span>
                </div>

                <!-- Espace droite -->
                <div class="md:col-span-4"></div>
            </div>

        </div>
    </div>

</section>

<?= $this->endSection() ?>
