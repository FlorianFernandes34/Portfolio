<?php

namespace App\Controllers;

class Tech extends BaseController {
    public function getIndex() {
        $data = [
            'title' => 'Veille Technologique - Florian Fernandes'
        ];

        return view('pages/tech', $data);
    }

}