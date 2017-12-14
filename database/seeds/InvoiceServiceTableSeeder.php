<?php

use Illuminate\Database\Seeder;

use App\Invoice;
use App\Service;

class InvoiceServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	# key is the invoice id
    	# array contains service ids and quantities for each
        $invoices = [
            '1' => ['1', '2'],
            '2' => ['3', '4'],
            '3' => ['4' ,'1'],
        ];

        $count = count($invoices);

        foreach ($invoices as $id => $services) {

        	# First get the invoice
        	$invoice = Invoice::find($id);

        	foreach ($services as $serviceId) {
        		$service = Service::find($serviceId);

        		# Connect service to the invoice
        		$invoice->services()->save($service);
        	}
        }
    }
}
