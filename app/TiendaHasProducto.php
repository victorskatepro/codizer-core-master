<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TiendaHasProducto
 *
 * @mixin \Eloquent
 */
class TiendaHasProducto extends Model
{
    protected $table = 'tienda_has_producto';
    protected $primaryKey = 'tienda_id';
    protected $fillable = ['tienda_id', 'producto_id'];
    public $timestamps = false;
}
