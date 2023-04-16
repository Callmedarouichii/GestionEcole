<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $table = 'enseignants';

    protected $fillable = ['nom', 'prenom', 'date_naissance', 'adresse', 'email', 'telephone'];

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}
