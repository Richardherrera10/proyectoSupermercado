<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Clientes extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = "clientes";
    protected $fillable = [
        "nombreCompleto", "NIT", "direccion"
    ];
}
