<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $table = 'cours';

    protected $fillable = ['enseignant_id', 'matiere_id'];

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function emploisDuTemps()
    {
        return $this->hasMany(EmploiDuTemps::class);
    }

    public function eleves()
    {
        return $this->belongsToMany(Eleve::class, 'notes')->withPivot('note');
    }
}
