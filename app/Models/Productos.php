<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = "IdProducto";

    protected $fillable = [
        'Nombre', 'Descripcion',
        'Estock','Precio','IdMarca',
        'IdCategoria'
    ];

    public function nombreCategoria(){
        $nombreCategoria = Categorias::find($this->IdCategoria);

        return $nombreCategoria;
    }

}
