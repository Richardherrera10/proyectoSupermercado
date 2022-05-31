<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Empleos extends Model
{
    use HasFactory;
    protected $fillable = [
        'empleosDisponibles',
        'primerSegundoNombre',
        'primerSegundoApellido',
        'nacionalidad',
        'fechaDeNacimiento',
        'direccion',
        'telefono',
        'email',
        'carta_path',
        'cv_path'
    ];
}
