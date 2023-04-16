<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    protected $fillable = ['eleve_id', 'cours_id', 'note'];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
