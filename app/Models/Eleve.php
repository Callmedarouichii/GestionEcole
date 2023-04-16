<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $table = 'eleves';

    protected $fillable = ['nom', 'prenom', 'date_naissance', 'adresse', 'email', 'telephone'];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function emploisDuTemps()
    {
        return $this->hasMany(EmploiDuTemps::class);
    }

    public function cours()
    {
        return $this->belongsToMany(Cours::class, 'notes')->withPivot('note');
    }
}
