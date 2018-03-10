<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Note
 *
 * @mixin \Eloquent
 */
class Note extends Model
{
    protected $fillable = ['content', 'users_id'];
}
