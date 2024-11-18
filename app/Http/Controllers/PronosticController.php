<?php

namespace App\Http\Controllers;

use App\Models\Pronostic;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PronosticController extends Controller
{
    public function pronos(): View
    {
        // $pronostics = Pronostic::all();
        // return view('pronos.pronos', [
        //     'pronostics' => $pronostics,
        // ]);
        return view('pronos.pronos', [
            'pronostics' => Pronostic::latest()->paginate(10),
        ]);
    }

    public function show(Pronostic $pronostic): View
    {
        return view('pronos.show', [
            'pronostic' => $pronostic,
        ]);
    }
}
