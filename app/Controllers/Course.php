<?php

namespace App\Controllers;

class Course extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'Parcours - Florian Fernandes'
        ];

        return view('pages/course', $data);
    }
}
