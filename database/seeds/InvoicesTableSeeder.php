<?php

use Illuminate\Database\Seeder;

use App\Invoice;

use App\Service;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
            ['250.00','1', '2018-12-25'],
            ['400', '2', '2018-1-19'],
            ['50.00','4', '2018-12-25'],
            ['10', '3', '2018-09-26'],
        ];

        $count = count($invoices);

        $serviceArray = ['4','2','3','1'];

        $serviceList = Service::findMany($serviceArray);

        foreach($serviceList as $lineItem) {
            $lineItem['quantity'] = '1';
        }

        dump($serviceList);

        $serviceList->toJson();

        foreach ($invoices as $key => $invoice) {
            Invoice::insert([
                'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'invoice_total' => $invoice[0],
                'client_id' => $invoice[1],
                'due_date' => $invoice[2],
                'services' => $serviceList,
            ]);
            $count--;
        }
    }
}
