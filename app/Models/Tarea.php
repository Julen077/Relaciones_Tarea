<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombreTarea", "usuario_id"
    ];
    public function usuarios(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
