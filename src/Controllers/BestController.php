<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\CategoryService;
use App\Services\MovieService;

class BestController extends Controller
{
    public function index(): void
    {
        $movies = new MovieService($this->db());

        $this->view('best', [
            'movies' => $movies->new(),
        ], 'Лучшие');
    }

    public function create(): void
    {

    }

    public function store(): void
    {

    }

    public function destroy(): void
    {

    }

    public function edit(): void
    {

    }

    public function update()
    {

    }
}
