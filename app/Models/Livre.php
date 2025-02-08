<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'isbn', 'resume', 'date_publication', 'couverture', 'auteur_id'];

    // Relation : Un livre appartient à un auteur
    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }
}
