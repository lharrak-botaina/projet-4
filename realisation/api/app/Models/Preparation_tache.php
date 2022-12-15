<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparation_tache extends Model
{
    use HasFactory;
    protected $table=' preparation_taches';
    protected $fillable=[
        'id',
        'Nom',
        'Prenom',
        'Duree',
        'Preparation_brief_id'
    ];
   
}
