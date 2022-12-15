<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant_preparation_brief extends Model
{
    use HasFactory;
    protected $table='  apprenant_preparation_briefs';
    protected $fillable=[
     'id',
     'Date_affectation',
     "Preparation_brief_id",
     "Apprenant_id",
     
          
    ];
}
