<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
        	['Cool Company A', 'Joe', 'Smith', 'joe@cool.com', '6461112323', '1 Cool Way NY, NY 10001', 'One Cool Guy', '1' ],
        	['Stark Industries', 'Tony', 'Stark', 'tony@starkindustries.com', '64612342323', '1 Stark Drive Stark, Stark CA 90215', 'Ironman', '1' ],
        	['Google', 'Larry', 'Page', 'larry@google.com', '123456789', '1 Google Circle, Mountainview CA 12345', 'Founder of Google', '0' ],
        	['Cool Company B', 'Mary', 'Smith', 'mary@coolb.com', '487526354', '1 Cooler Way Beverly Hills, CA 90210', 'One Cool Chick', '1' ],
        ];

        $count = count($clients);

        foreach ($clients as $key => $client) {
        	Client::insert([
        		'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            	'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            	'company' => $client[0],
            	'first_name' => $client[1],
            	'last_name' => $client[2],
            	'email' => $client[3],
            	'phone_number' => $client[4],
            	'address' => $client[5],
            	'client_notes' => $client[6],
            	'optin' => $client[7],
        	]);
        	$count--;
        }
    }
}
