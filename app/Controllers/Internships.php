<?php

namespace App\Controllers;

class Internships extends BaseController {

    public function getIndex() {
        $data = [
            'title' => 'Stages - Florian Fernandes'
        ];

        return view('pages/internships', $data);
    }

}