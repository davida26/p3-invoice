<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'company', 'email', 'address', 'phone_number', 'client_notes', 'optin',
    ];
}
