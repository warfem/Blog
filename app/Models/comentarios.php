<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    //use HasFactory;
    protected $table = "comentarios";
    protected $fillable =['titulo','comentario','created_at'];
}
