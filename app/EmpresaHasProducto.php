<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EmpresaHasProducto
 *
 * @mixin \Eloquent
 */
class EmpresaHasProducto extends Model
{
    protected $table = 'empresa_has_producto';
    protected $primaryKey = 'empresa_id';
    protected $fillable = ['empresa_id', 'producto_id'];

    public $timestamps = false;
}
