<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserHasAgendaContactos
 *
 * @mixin \Eloquent
 */
class UserHasAgendaContactos extends Model
{
    protected $table = 'users_has_agenda_contactos';
    protected $fillable = ['users_id', 'contacto_id'];
}
