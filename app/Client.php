<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public static function getClients()
    {
        $clients = Client::orderBy('company')->get();

        $clientList = [];

        foreach ($clients as $client) {
            $clientList[$client['id']] = $client->company;
        }

        return $clientList;
    }

    public function user()
    {
        # Client belongs to user
        return $this->belongsTo('App\User');
    }

    public function invoice()
    {
        return $this->hasMany('App\Invoice');
    }

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'user_id', 'status', 'created_at', 'updated_at'
    ];
    /**
    * The attributes that are mass assignable.
    *
    * @var array`
    */
    protected $fillable = [
        'first_name', 'last_name', 'company', 'email', 'address', 'phone_number', 'client_notes', 'optin', 'user_id', 'status',
    ];
}
