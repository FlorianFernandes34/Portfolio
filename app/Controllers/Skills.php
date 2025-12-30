<?php

namespace App\Controllers;

class Skills extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'Compétences - Florian Fernandes'
        ];

        return view('pages/skills', $data);
    }
}
