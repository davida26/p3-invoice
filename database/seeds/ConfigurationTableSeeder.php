<?php

use Illuminate\Database\Seeder;

use App\Configuration;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
        ['InvoiceMe', '6461235656', '1 Broadway. New York, NY 10001', 'billing@domain.com', 'support@domain.com', '123456789', 'logo.png', 'website.com', 0],
    ];

        $count = count($settings);
    
        foreach ($settings as $key => $setting) {
            Configuration::insert([
            'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            'name' => $setting[0],
            'phone' => $setting[1],
            'address' => $setting[2],
            'billing_email' => $setting[3],
            'support_email' => $setting[4],
            'tax_id' => $setting[5],
            'logo' => $setting[6],
            'website' => $setting[7],
            'show_tax_id' => $setting[8],
        ]);
            $count--;
        }
    }
}
