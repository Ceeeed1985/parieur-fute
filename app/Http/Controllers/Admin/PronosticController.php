<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pronostic;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PronosticController extends Controller
{

    public function index(): View
    {
        return view('admin.pronos.index', [
            'pronostics' => Pronostic::without('category')->latest()->get(),
        ]);
    }


    public function create(): View
    {
        return view('admin.pronos.form');
    }


    public function store(Request $request)
    {
        //
    }

   

    public function edit(Pronostic $pronostic)
    {
        //
    }


    public function update(Request $request, Pronostic $pronostic)
    {
        //
    }


    public function destroy(Pronostic $pronostic)
    {
        Storage::delete($pronostic->thumbnail);
        $pronostic->delete();
        return redirect()->route('admin.pronostics.index')->with('success', 'Pronostic supprimé avec succès.');
    }
}
