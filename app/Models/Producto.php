<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proveedores;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Marca;

class Producto extends Model{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        "nombre", "precio", "descripcion"
    ];
    public function proveedores(){
        return $this->hasMany(Proveedores::class, "producto_id");
    }

    public function marca(){
        return $this->hasMany(Marca::class, "producto_id");
    }
}
