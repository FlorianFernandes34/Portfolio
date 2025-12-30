<?php

namespace App\Controllers;

class Contact extends BaseController {
    public function getIndex() {
        $data = [
            'title' => 'Contact - Florian Fernandes'
        ];

        return view('pages/contact', $data);
    }

    public function postSend() {
        $session = session();

        $nom = $this->request->getPost('name');
        $mail = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        $email = \Config\Services::email();

        $email->setFrom($mail, $nom);
        $email->setTo('fernandesflorian38200@gmail.com');
        $email->setSubject($subject);

        $body = "
            <p><strong>Nom :</strong> {$nom}</p>
            <p><strong>Email :</strong> {$mail}</p>
            <p><strong>Message :</strong><br>{$message}</p>
        ";

        $email->setMessage($body);

        if ($email->send()) {
            $session->setFlashdata('successSend', 'Votre message a bien été envoyé, une réponse vous sera adressée sous peu');
        } else {
            $session->setFlashdata('errorSend', 'Une erreur est survenue lors de l\'envoi de votre message');
        }

        return redirect()->back();

    }
}