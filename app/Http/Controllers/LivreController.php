<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LivreController extends Controller
{
    public function index(Request $request)
    {
        // $books = Livre::paginate(12); 
        $books = DB::table('livres')
                    ->join('auteurs', 'livres.auteur_id', '=', 'auteurs.id')
                    ->select('livres.*', 'auteurs.nom as auteur_nom')
                    ->paginate(12);
        return view('Livres.index', compact('books'));
    }

    public function show($id)
    {
        // $book = Livre::with('auteur')->findOrFail($id);
        $book = DB::table('livres')
        ->join('auteurs', 'livres.auteur_id', '=', 'auteurs.id')
        ->select('livres.*', 'auteurs.nom as auteur_nom')
        ->where('livres.id', $id)
        ->first();
        // dd($book);
        return view('Livres.livre', compact('book'));
    }
}