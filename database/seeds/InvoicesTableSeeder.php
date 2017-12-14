<?php

use Illuminate\Database\Seeder;

use App\Invoice;

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
            ['250.00','1', '2018-12-25' ],
            ['400', '2', '2018-1-05'],
        ];

        $count = count($invoices);

        foreach ($invoices as $key => $invoice) {
            Invoice::insert([
                'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'invoice_total' => $invoice[0],
                'client_id' => $invoice[1],
                'due_date' => $invoice[2],
            ]);
            $count--;
        }
    }
}
