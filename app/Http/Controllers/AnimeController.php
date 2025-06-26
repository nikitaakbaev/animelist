<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Inertia\Inertia;
use Inertia\Response;

class AnimeController extends Controller
{
    public function index(): Response
    {
        $animes = Anime::all();

        return Inertia::render('anime/Index', [
            'animes' => $animes,
        ]);
    }
}
