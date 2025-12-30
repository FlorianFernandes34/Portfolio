<?php $session = session()?>

<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="max-w-4xl mx-auto px-6 mt-32 mb-40">

    <!-- TITRE -->
    <header class="text-center mb-20">
        <h1 class="text-4xl font-semibold mb-4">Contact</h1>
        <p class="text-gray-500 max-w-2xl mx-auto">
            N’hésitez pas à me contacter pour toute question, collaboration ou projet.
        </p>
    </header>


    <div class="flex justify-center">

        <!-- FORMULAIRE CENTRÉ -->
        <div class="w-full max-w-2xl bg-gray-50 rounded-2xl p-10 shadow-lg">
            <?php if(session()->getFlashdata('successSend')): ?>
                <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-800 border border-green-200">
                    <?= session()->getFlashdata('successSend') ?>
                </div>
            <?php elseif(session()->getFlashdata('errorSend')): ?>
                <div class="mb-6 p-4 rounded-lg bg-red-100 text-red-800 border border-red-200">
                    <?= session()->getFlashdata('errorSend') ?>
                </div>
            <?php endif; ?>

            <?= form_open('contact/send', ['class' => 'space-y-6']) ?>

            <div>
                <?= form_label('Nom', 'name', ['class' => 'block text-sm font-medium text-gray-700']) ?>
                <?= form_input([
                    'name' => 'name',
                    'id' => 'name',
                    'value' => set_value('name'),
                    'class' => 'mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-black focus:border-black px-4 py-2',
                    "required" => "true",
                ]) ?>
            </div>

            <div>
                <?= form_label('Email', 'email', ['class' => 'block text-sm font-medium text-gray-700']) ?>
                <?= form_input([
                    'type' => 'email',
                    'name' => 'email',
                    'id' => 'email',
                    'value' => set_value('email'),
                    'class' => 'mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-black focus:border-black px-4 py-2',
                    'required' => 'true',
                ]) ?>
            </div>

            <div>
                <?= form_label('Sujet', 'subject', ['class' => 'block text-sm font-medium text-gray-700']) ?>
                <?= form_input([
                    'name' => 'subject',
                    'id' => 'subject',
                    'value' => set_value('subject'),
                    'class' => 'mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-black focus:border-black px-4 py-2',
                    'required' => 'true',
                ]) ?>
            </div>

            <div>
                <?= form_label('Message', 'message', ['class' => 'block text-sm font-medium text-gray-700']) ?>
                <?= form_textarea([
                    'name' => 'message',
                    'id' => 'message',
                    'rows' => 6,
                    'value' => set_value('message'),
                    'class' => 'mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-black focus:border-black px-4 py-2',
                    'required' => 'true',
                ]) ?>
            </div>

            <!-- RGPD -->
            <div class="flex items-start space-x-3">
                <input type="checkbox" name="rgpd" id="rgpd" class="mt-1 h-4 w-4 text-black border-gray-300 rounded" required>
                <label for="rgpd" class="text-gray-700 text-sm">
                    J’accepte que mes données soient utilisées uniquement pour répondre à ce message. Aucune donnée ne sera stockée.
                </label>
            </div>

            <div class="text-center">
                <?= form_submit('submit', 'Envoyer', [
                    'class' => 'w-full md:w-1/2 px-6 py-3 bg-black text-white rounded-full shadow hover:bg-gray-800 transition'
                ]) ?>
            </div>

            <?= form_close() ?>

        </div>

    </div>

</section>

<?= $this->endSection() ?>
