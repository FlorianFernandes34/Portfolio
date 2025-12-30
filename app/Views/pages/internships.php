<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="max-w-5xl mx-auto px-6 mt-32 mb-40">

    <!-- TITRE -->
    <header class="text-center mb-24">
        <h1 class="text-4xl font-semibold mb-6">Stages</h1>
        <p class="text-muted max-w-2xl mx-auto">
            Voici les différents stages que j'ai effectués au cours de ma scolarité.
        </p>
    </header>

    <!-- STAGES BTS -->
    <section class="mb-24">
        <h2 class="text-2xl font-medium mb-8">BTS SIO — Informatique</h2>

        <div class="space-y-6">
            <!-- Stage BTS -->
            <details class="group bg-gray-50 rounded-xl shadow px-6 py-4">
                <summary class="cursor-pointer list-none flex justify-between items-center">
                    <div>
                        <h3 class="font-medium">Librairie La Livreraie - Mende</h3>
                        <p class="text-sm text-gray-500">Développement d'un back-office | Juin 2025 - Juillet 2025</p>
                    </div>
                    <span class="text-sm text-gray-400 group-open:rotate-180 transition">⌄</span>
                </summary>

                <div class="mt-6 text-gray-700 leading-relaxed">
                    <p class="mb-3 leading-relaxed">
                        Ce premier stage en informatique s’est déroulé au sein d’une librairie disposant déjà d’un site internet.
                        L’objectif principal était d’améliorer ce site en y intégrant un back-office léger,
                        permettant la modification des contenus sans nécessiter de connaissances en programmation.
                    </p>

                    <p class="leading-relaxed mb-3">
                        Un système de gestion des actualités liées à la librairie a également été mis en place.
                        Le site est accessible à<a href="https://lalivreraie.fr" target="_blank" class="text-blue-600 hover:underline ml-1">cette adresse</a>.
                    </p>


                    <ul class="list-disc list-inside text-sm text-gray-600">
                        <li>Développement PHP</li>
                        <li>Interaction avec une base de données (PDO)</li>
                    </ul>
                </div>
            </details>
        </div>
    </section>

    <!-- STAGES BAC PRO -->
    <section>
        <h2 class="text-2xl font-medium mb-8">Bac Pro — Maintenance des Véhicules</h2>

        <div class="space-y-6">
            <!-- Stage 1 -->
            <details class="group bg-gray-50 rounded-xl shadow px-6 py-4">
                <summary class="cursor-pointer list-none flex justify-between items-center">
                    <div>
                        <h3 class="font-medium">Garage Dekapneu - Sète</h3>
                        <p class="text-sm text-gray-500">Stage de maintenance automobile | Janvier 2022 - Février 2022</p>
                    </div>
                    <span class="text-sm text-gray-400 group-open:rotate-180 transition">⌄</span>
                </summary>

                <div class="mt-6 text-gray-700 leading-relaxed">
                    <p class="mb-3">
                        Premier stage d'une durée de 4 semaines en maintenance automobile, j'ai participé à la maintenance courante sur des véhicules légers.
                    </p>
                </div>
            </details>

            <!-- Stage 2 -->
            <details class="group bg-gray-50 rounded-xl shadow px-6 py-4">
                <summary class="cursor-pointer list-none flex justify-between items-center">
                    <div>
                        <h3 class="font-medium">Garage Méditerrané Automobiles - Sète</h3>
                        <p class="text-sm text-gray-500">Stage de maintenance automobile | Juin 2022 - Juillet 2022</p>
                    </div>
                    <span class="text-sm text-gray-400 group-open:rotate-180 transition">⌄</span>
                </summary>

                <div class="mt-6 text-gray-700 leading-relaxed">
                    <p>
                        Deuxième stage en maintenance automobile. Celui-ci m'a permis de renforcer mes compétences dans ce domaine.
                    </p>
                </div>
            </details>

            <!-- Stage 3 -->
            <details class="group bg-gray-50 rounded-xl shadow px-6 py-4">
                <summary class="cursor-pointer list-none flex justify-between items-center">
                    <div>
                        <h3 class="font-medium">Garage Méditerrané Automobiles - Sète</h3>
                        <p class="text-sm text-gray-500">Stage de maintenance automobile | Janvier 2023 - Mars 2023</p>
                    </div>
                    <span class="text-sm text-gray-400 group-open:rotate-180 transition">⌄</span>
                </summary>

                <div class="mt-6 text-gray-700 leading-relaxed">
                    <p>
                        Ce troisième stage m'a permis d'explorer de nouvelles choses dans le domaine de la maintenance automobile. Il m'a également permis de développer un esprit de rigueur.
                    </p>
                </div>
            </details>

            <!-- Stage 4 -->
            <details class="group bg-gray-50 rounded-xl shadow px-6 py-4">
                <summary class="cursor-pointer list-none flex justify-between items-center">
                    <div>
                        <h3 class="font-medium">Garage Méditerrané Automobiles - Sète</h3>
                        <p class="text-sm text-gray-500">Stage de maintenance automobile | Novembre 2023 - Janvier 2024</p>
                    </div>
                    <span class="text-sm text-gray-400 group-open:rotate-180 transition">⌄</span>
                </summary>

                <div class="mt-6 text-gray-700 leading-relaxed">
                    <p>
                        Ce dernier stage m'a permis de pouvoir travailler en quasi totale autonomie. Il m'a également apporté de nouvelles connaissances, notamment dans le
                        diagnostic de pannes complexes (électroniques et mécaniques).
                    </p>
                </div>
            </details>
        </div>
    </section>
</section>

<?= $this->endSection() ?>
