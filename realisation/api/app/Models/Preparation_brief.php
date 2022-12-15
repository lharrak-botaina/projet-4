<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparation_brief extends Model
{
    use HasFactory;
    protected $table=' preparation_brief';
    protected $fillable=[
        'id',
        'Nom',
        'Description',
        'Duree',
        'Formateur_id'
    ];
  
}
