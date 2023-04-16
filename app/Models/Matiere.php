<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table = 'matieres';

    protected $fillable = ['nom'];

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}
