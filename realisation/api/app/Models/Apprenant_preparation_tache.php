<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant_preparation_tache extends Model
{
    use HasFactory;
    protected $table='apprenant_preparation_taches';
    protected $fillable=[
        'id',
        "Preparation_tache_id",
        "Apprenant_id",
        "Apprenant_preparationBrief_id",
        'Etat',
        "date_debut",
        "date_fin"
    ];
}
