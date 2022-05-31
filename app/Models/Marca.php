<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model{
    use HasFactory;
    protected $table = "marca";
    public function producto(){
        return $this->belongsTo(Producto::class, "producto_id");
    }

}
