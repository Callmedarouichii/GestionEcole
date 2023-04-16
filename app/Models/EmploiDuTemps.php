<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploiDuTemps extends Model
{
    protected $table = 'emplois_du_temps';

    protected $fillable = ['eleve_id', 'cours_id', 'date', 'heure_debut', 'heure_fin'];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
