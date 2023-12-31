<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    // Nombre de la tabla que se conecta a este Modelo
    protected $table = 'productos';

    // Nombres de las columnas que son modificables
    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'imagen', 'categoria_id'
    ];

    // INNER JOIN con la tabla Categoría por medio de la FK categoria_id
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    // INNER JOIN con la tabla Users por medio de la FK vendedor_id
    public function vendedor() {
        return $this->belongsTo(User::class, 'vendedor_id');
    }
}
