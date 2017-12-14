<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function client()
    {
        # Invoice belongs to Client
        return $this->belongsTo('App\Client');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service')->withTimestamps();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'invoice_total', 'due_date',
    ];

}
