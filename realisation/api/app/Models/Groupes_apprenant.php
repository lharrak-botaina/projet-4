<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupes_apprenant extends Model
{
    use HasFactory;
    protected $table=' groupes_apprenants';
    protected $fillable=[
       'id',
       "Groupe_id",
       "Apprenant_id"
    ];
}
