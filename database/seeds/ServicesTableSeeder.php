<?php

use Illuminate\Database\Seeder;

use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $services = [
        ['Consulting Fee', '150', '100', '100', 'Standard Hourly Consulting Fee'],
        ['Design Fee', '100', '75', '60', 'Hourly Design Fee'],
        ['SEO Optimization', '80', '65', '30', 'Hourly SEO Optimization Fee'],
        ['Development Fee', '200', '150', '80', 'Hourly Development Fee'],
    ];

    $count = count($services);
    
    foreach ($services as $key => $service) {
        Service::insert([
            'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            'name' => $service[0],
            'list_price' => $service[1],
            'sale_price' => $service[2],
            'cost' => $service[3],
            'description' => $service[4],
        ]);
        $count--;
    }

    }
}
