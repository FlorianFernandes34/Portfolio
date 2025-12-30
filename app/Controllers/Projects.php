<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'Projets - Florian Fernandes'
        ];

        return view('pages/projects', $data);
    }
}
