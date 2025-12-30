<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="max-w-6xl mx-auto px-6 mt-32 mb-40">

    <!-- TITRE -->
    <header class="text-center mb-24">
        <h1 class="text-4xl font-semibold mb-6">Compétences</h1>
        <p class="text-gray-500 max-w-2xl mx-auto">
            Voici mes compétences techniques et méthodologiques classées par catégories.
        </p>
    </header>

    <!-- COMPETENCES -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

        <!-- WEB -->
        <div>
            <h2 class="text-2xl font-semibold mb-6">💻 Web</h2>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-blue-200 text-blue-800 rounded-full shadow-sm">HTML</span>
                <span class="px-4 py-2 bg-blue-200 text-blue-800 rounded-full shadow-sm">CSS / Tailwind / Bootstrap</span>
                <span class="px-4 py-2 bg-blue-200 text-blue-800 rounded-full shadow-sm">JavaScript</span>
                <span class="px-4 py-2 bg-blue-200 text-blue-800 rounded-full shadow-sm">PHP / CodeIgniter 4 / Laravel 12</span>
            </div>
        </div>

        <!-- BASE DE DONNEES -->
        <div>
            <h2 class="text-2xl font-semibold mb-6">🗄️ Base de données</h2>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-green-200 text-green-800 rounded-full shadow-sm">MySQL</span>
                <span class="px-4 py-2 bg-green-200 text-green-800 rounded-full shadow-sm">Conception de MCD</span>
                <span class="px-4 py-2 bg-green-200 text-green-800 rounded-full shadow-sm">SQL Server</span>
            </div>
        </div>

        <!-- DESKTOP -->
        <div>
            <h2 class="text-2xl font-semibold mb-6">📱 Desktop / Mobile</h2>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-purple-200 text-purple-800 rounded-full shadow-sm">Java</span>
                <span class="px-4 py-2 bg-purple-200 text-purple-800 rounded-full shadow-sm">Python</span>
                <span class="px-4 py-2 bg-purple-200 text-purple-800 rounded-full shadow-sm">Android Studio</span>
            </div>
        </div>

        <!-- GESTION DE PROJET -->
        <div>
            <h2 class="text-2xl font-semibold mb-6">📋 Gestion de projet</h2>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-red-200 text-red-800 rounded-full shadow-sm">Trello</span>
                <span class="px-4 py-2 bg-red-200 text-red-800 rounded-full shadow-sm">Git / GitHub</span>
                <span class="px-4 py-2 bg-red-200 text-red-800 rounded-full shadow-sm">Gestion de projet</span>
            </div>
        </div>

    </div>
</section>
<!-- CERTIFICATIONS -->
<section class="max-w-6xl mx-auto px-6 mt-16 mb-40">

    <h2 class="text-3xl font-semibold mb-10 text-center">📜 Certifications</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Certification 1 -->
        <a href="/docs/certification1.pdf" target="_blank" class="block p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-medium mb-2">Certification HTML & CSS</h3>
            <p class="text-gray-500 text-sm">Cliquez pour voir la certification</p>
        </a>

        <!-- Certification 2 -->
        <a href="/docs/certification2.pdf" target="_blank" class="block p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-medium mb-2">Certification JavaScript</h3>
            <p class="text-gray-500 text-sm">Cliquez pour voir la certification</p>
        </a>

        <!-- Certification 3 -->
        <a href="/docs/certification3.pdf" target="_blank" class="block p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-medium mb-2">Certification PHP / CodeIgniter 4</h3>
            <p class="text-gray-500 text-sm">Cliquez pour voir la certification</p>
        </a>

    </div>

</section>


<?= $this->endSection() ?>
