<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Configuration;

use \Session;

class ConfigurationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // checks to see if record exists or creates it, backup if ConfigurationSeeder fails
        $settings = Configuration::firstOrCreate(
            [
            'id' => '1',],
            ['name' => 'InvoiceMe',
            'address' => '1 Broadway. New York, NY 10001',
            'logo' => 'logo.png',
            'phone' => '6461112346',
            'billing_email' => 'billing@domain.com',
            'support_email' => 'support@domain.com',
            'tax_id' => '123456789',
            'website' => 'website.com',
            'show_tax_id' => 1
        ]
        );

        return view('config.index', ["settings" => $settings]);
    }

    public function edit($id, Configuration $configuration)
    {
        $settings = Configuration::find($id);
        return view('config.edit', ["setting" => $settings]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Configuration $configuration)
    {
        Configuration::find($id)->update($request->all());
        return redirect()->route('settings.index')->with('alert', 'Settings Successfully Updated');
    }
}
