<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProductoHasCategoria
 *
 * @mixin \Eloquent
 */
class ProductoHasCategoria extends Model
{
    protected $table = 'producto_has_categoria';
    protected $primaryKey = 'categoria_id';
    protected $fillable = ['categoria_id','producto_id'];
    public $timestamps = false;
}
