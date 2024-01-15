<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'imagen',
        'contenido',
        'fecha',
        'estado',
        'destacado',
        'id_usr',
        'id_cat'
    ];
}
