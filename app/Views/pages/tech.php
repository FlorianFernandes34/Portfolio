<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="max-w-6xl mx-auto px-6 mt-32 mb-40">

    <!-- TITRE -->
    <header class="text-center mb-32">
        <h1 class="text-4xl font-semibold mb-6">Veille technologique</h1>
        <p class="text-muted max-w-2xl mx-auto">
            Suivi des évolutions technologiques à travers une veille structurée
            et documentée.
        </p>
    </header>

    <!-- THEME ACTUEL -->
    <section class="mb-32">
        <h2 class="text-2xl font-medium mb-6">Thème de veille actuel</h2>

        <div class="bg-gray-50 rounded-2xl p-8 shadow">
            <h3 class="text-xl font-semibold mb-3">
                L'informatique quantique : évolution et applications
            </h3>
            <p class="text-gray-700 leading-relaxed max-w-3xl">
                Cette veille se concentre sur l'informatique quantique, un domaine en plein essor.
                Les ordinateurs quantiques offrent une puissance de calcul bien supérieure à celle des ordinateurs classiques,
                ce qui en fait des outils prometteurs pour l'entraînement de modèles d'IA générative, la réalisation de simulations physiques complexes,
                et de nombreuses autres applications innovantes.
            </p>
        </div>
    </section>

    <section class="mb-32">
        <h2 class="text-2xl font-medium mb-8">Méthodologie et outils</h2>

        <div class="grid md:grid-cols-2 gap-12">

            <!-- OUTILS -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow">
                <h3 class="text-xl font-semibold mb-4">Outils utilisés</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Flux RSS et agrégateurs (Feedly, Feedbro, Feeder)</li>
                    <li>Alertes Google et newsletters spécialisées</li>
                </ul>
            </div>

            <!-- MOTS-CLÉS -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow">
                <h3 class="text-xl font-semibold mb-4">Mots-clés et thématiques</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Informatique quantique</li>
                    <li>Ordinateurs quantiques</li>
                    <li>IBM Quantum / Google Quantum</li>
                    <li>Simulateurs quantiques</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FRISE CHRONOLOGIQUE -->
    <section>
        <h2 class="text-2xl font-medium mb-24">Articles marquants</h2>

        <div class="relative">

            <!-- FIL CENTRAL -->
            <div class="absolute left-1/2 top-0 bottom-0 w-[2px] bg-gray-300 -translate-x-1/2"></div>

            <div class="space-y-32">

                <!-- ARTICLE 1 - DROITE -->
                <article class="relative md:grid md:grid-cols-9 md:items-center">

                    <div class="md:col-span-4"></div>

                    <!-- POINT -->
                    <div class="col-span-1 flex justify-center relative z-10">
                        <span class="w-4 h-4 bg-black rounded-full"></span>
                    </div>

                    <div class="md:col-span-4 md:pl-16">
                        <time class="text-sm text-gray-500">Avril 2025</time>
                        <h3 class="text-lg font-medium mt-2 mb-3">
                            Communication quantique longue distance
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Étude démontrant la distribution de clés quantiques sur un réseau télécom réel de 254km, illustrant un pas vers un Internet quantique sécurisé.
                        </p>
                        <a href="https://www.nature.com/articles/s41586-025-08801-w" target="_blank"
                           class="inline-block mt-3 text-sm text-blue-600 hover:underline">
                            Lire l’article
                        </a>
                    </div>
                </article>

                <!-- ARTICLE 2 - GAUCHE -->
                <article class="relative md:grid md:grid-cols-9 md:items-center">

                    <div class="md:col-span-4 md:text-right md:pr-16">
                        <time class="text-sm text-gray-500">Décembre 2024</time>
                        <h3 class="text-lg font-medium mt-2 mb-3">
                            Google Willow                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Google Willow, un processeur quantique de 105qbits, a réalisé un calcul en ~5 minutes, une tâche qui nécessiterait environ 10²⁵ années sur les superordinateurs classiques les plus puissants.
                        </p>
                        <a href="https://www.forbes.com/sites/moorinsights/2025/01/28/googles-105-qubit-willow-chip-achieves-major-quantum-milestones" target="_blank"
                           class="inline-block mt-3 text-sm text-blue-600 hover:underline">
                            Lire l’article
                        </a>
                    </div>

                    <!-- POINT -->
                    <div class="col-span-1 flex justify-center relative z-10">
                        <span class="w-4 h-4 bg-black rounded-full"></span>
                    </div>

                    <div class="md:col-span-4"></div>
                </article>

            </div>
        </div>
    </section>

    <!--Thèmes explorés-->
    <section class="mt-32">
        <h2 class="text-2xl font-medium mb-8">Thèmes explorés</h2>

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            <li class="bg-gray-50 rounded-xl p-6 shadow">
                <h3 class="font-medium mb-2">L'IA générative</h3>
                <p class="text-sm text-gray-600">
                    Cette veille avait pour but de me tenir informé sur les évolutions de l'IA générative. Ce thème étant trop vaste, et remontant trop de résultats,
                    je l'ai abandoné.
                </p>
            </li>

            <li class="bg-gray-50 rounded-xl p-6 shadow">
                <h3 class="font-medium mb-2">L'IA et les jeux-vidéos.</h3>
                <p class="text-sm text-gray-600">
                    Ce thème avait pour but de me tenir informé sur l'évolution de l'implémentation de l'intelligence artificielle dans les jeux-vidéos.
                </p>
            </li>

        </ul>
    </section>

</section>

<?= $this->endSection() ?>
