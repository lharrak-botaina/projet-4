<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $table='groupes';
    protected $fillable=[
       'id',
       'Nom_groupe',
       'id_Annee_formation',
        "Formateur_id",
        'Logo'
    ];
}
