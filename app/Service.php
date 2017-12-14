<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function invoices()
    {
        return $this->belongsToMany('App\Invoice')->withTimestamps();
    }

    public static function getServices()
    {
        $services = Service::orderBy('name')->get();

        $serviceList = [];

        foreach ($services as $service) {
            $serviceList[$service['id']] = $service->name;
        }

        return $serviceList;
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
