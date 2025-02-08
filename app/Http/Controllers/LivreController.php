<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(Request $request)
    {
        $books = Livre::paginate(12); 

        return view('Livres.index', compact('books'));
    }

    public function show($id)
    {
        $book = Livre::with('auteur')->findOrFail($id);
        return view('Livres.livre', compact('book'));
    }
}