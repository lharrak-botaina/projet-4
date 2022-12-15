<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $table='formateur';
    protected $fillable=[
        "id",
        "Nom _formateur",
        "Prenom_formateur",
        "Email_formateur",
        "Telephone",
        "Adress",
        "CIN",
        "Image"
    ];
}
