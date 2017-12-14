<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function invoices()
    {
        return $this->belongsToMany('App\Invoice')->withTimestamps();
    }
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'description', 'sale_price', 'list_price', 'cost',
    ];
}
