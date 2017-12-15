<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'logo', 'phone', 'billing_email', 'support_email', 'tax_id', 'show_tax_id', 'website',
    ];
}
