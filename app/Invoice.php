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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'invoice_total', 'due_date',
    ];
}
