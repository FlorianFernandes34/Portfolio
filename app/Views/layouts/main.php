<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('public/images/favicon/favicon.jpeg') ?>" type="image/png">


    <!-- Tailwind (usage sobre) -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white text-text antialiased">

<header class="border-b border-border">
    <div class="max-w-5xl mx-auto px-6 h-16 flex items-center justify-between">
        <span class="text-sm font-medium"><a href="<?= base_url()?>">Florian Fernandes</a></span>
        <nav class="flex gap-8 text-sm text-muted">
            <a href="<?= base_url('course')?>" class="hover:text-text">Parcours</a>
            <a href="<?= base_url('skills')?>" class="hover:text-text">Compétences</a>
            <a href="<?= base_url('projects')?>" class="hover:text-text">Projets</a>
            <a href="<?= base_url('internships')?>" class="hover:text-text">Stages</a>
            <a href="<?= base_url('tech')?>" class="hover:text-text">Veille Technologique</a>
            <a href="<?= base_url('contact')?>" class="hover:text-text">Contact</a>
        </nav>
    </div>
</header>

<main>
    <?= $this->renderSection('content') ?>
</main>

<footer class="border-t border-border mt-32">
    <div class="max-w-5xl mx-auto px-6 py-10 text-sm text-muted flex justify-between">
        <span>© <?= date('Y') ?> Florian Fernandes</span>
        <span>CodeIgniter 4 · PHP</span>
    </div>
</footer>

</body>
</html>
