<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="max-w-6xl mx-auto px-6 mt-32 mb-40">

    <!-- TITRE + GitHub -->
    <header class="text-center mb-24">
        <h1 class="text-4xl font-semibold mb-6">Projets</h1>
        <p class="text-gray-500 max-w-2xl mx-auto mb-6">
            Découvrez mes projets personnels et professionnels. Tous sont disponibles sur mon GitHub.
        </p>
        <a href="https://github.com/FlorianFernandes34" target="_blank" class="inline-block px-6 py-3 bg-black text-white rounded-full shadow hover:bg-gray-800 transition">
            Voir mon GitHub
        </a>
    </header>

    <!-- GRILLE DE PROJETS -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <?php
        $projects = [
            [
                'title' => 'Projet Web Portfolio',
                'desc' => 'Mon Portfolio personnel, conçu avec CodeIgniter4, TailWindCSS et JavaScript.',
                'tech' => 'HTML, PHP, CI4, Tailwind, JS',
                'link' => 'https://github.com/tonUsername/portfolio',
                'etat' => 'En Cours'
            ],
            [
                'title' => 'Application Web d\'e-commerce',
                'desc' => 'Application web conçue dans le cadre d\'une de mes situ. pro., en vue de mon examen du BTS.',
                'tech' => 'HTML, PHP, CI4, Tailwind, JS',
                'link' => 'https://github.com/FlorianFernandes34/pharmaloz',
                'etat' => 'En Cours'
            ],
            [
                'title' => 'Application Desktop de Billeterie',
                'desc' => 'Projet d\'application desktop conçue dans le cadre d\'une de mes situ. pro., en collaboration avec d\'autres étudiants.',
                'tech' => 'API Rest (CI4), PHP, Java, Swing',
                'link' => '',
                'etat' => 'En Cours'
            ],
            [
                'title' => 'Bot Discord',
                'desc' => 'Bot Discord permettant de recenser les absences/présences de membres d\'un projet sur un jeu vidéo.',
                'tech' => 'NodeJS, DiscordJS, JavaScript',
                'link' => 'https://github.com/FlorianFernandes34/DiscordBotPresence',
                'etat' => 'Terminé'
            ],
            [
                'title' => 'Application Desktop de Gestion de Parc',
                'desc' => 'Projet pour apprendre l\'interaction entre une application Desktop et une base de données avec JDBC.',
                'tech' => 'Java, Swing, JDBC',
                'link' => '',
                'etat' => 'En Cours'
            ]
        ];
        ?>

        <?php foreach($projects as $proj): ?>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition group flex flex-col">

                <!-- Badge au-dessus du titre -->
                <?php if($proj['etat']): ?>
                    <span class="self-start text-xs font-semibold
                         <?= $proj['etat'] === 'En Cours' ? 'bg-yellow-100 text-yellow-800' :
                                ($proj['etat'] === 'Perso' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800'); ?>
                         px-2 py-1 rounded-full shadow mb-2"><?= $proj['etat'] ?>
                    </span>
                <?php endif; ?>

                <!-- Titre du projet -->
                <h3 class="text-xl font-medium mb-3"><?= $proj['title'] ?></h3>

                <p class="text-gray-700 mb-3"><?= $proj['desc'] ?></p>
                <p class="text-sm text-gray-500 mb-6">Technologies : <?= $proj['tech'] ?></p>
                <a href="<?= $proj['link'] ?>" target="_blank" class="text-blue-600 hover:underline text-sm">Voir sur GitHub</a>
            </div>


        <?php endforeach; ?>

    </div>

</section>

<?= $this->endSection() ?>
