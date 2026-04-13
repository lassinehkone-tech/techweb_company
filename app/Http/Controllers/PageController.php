<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function portfolio(): View
    {
        $projets = Projet::latest()->get();

        return view('pages.portfolio', compact('projets'));
    }
}
