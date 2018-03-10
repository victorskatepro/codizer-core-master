<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Categoria
 *
 * @mixin \Eloquent
 */
class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
