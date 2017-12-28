<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Invoice;

use App\Configuration;

use App\Service;

use App\Client;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::with('client')->get();

        return view('invoice.index', ["invoices"=>$invoices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Configuration::find(1);
    
        $serviceList = Service::getServices();

        $clientList = Client::getClients();

        $button = "Create Invoice";
        // # Create first charge object show JSON output
        // \Stripe\Stripe::setApiKey('sk_test_BNgNBLD75ASaONXdYM7aPVoq');
        // $charge = \Stripe\Charge::create(array('amount' => 100, 'currency' => 'usd', 'customer' => 'cus_BbhI1CinF1WePp' ));
        return view('invoice.create')->with([
            'setting' => $setting,
            'serviceList' => $serviceList,
            'clientList' => $clientList,
            'button' => $button
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'client_id' => 'required|numeric',
            'service_id' => 'required|numeric',
            'due_date' => 'required|date',
            'invoice_total' => 'required'
        ]);


        $data = $request->all();
        $data['due_date'] = date('Y/m/d', strtotime($request->due_date));

        $data = Invoice::create($data);

        $data->services()->sync($request->service_id);

        return redirect()->route('invoice.show', $data->id)->with('alert', 'Invoice Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::with('client')->find($id);
        $setting = Configuration::find(1);

        $dueDate = date('F d, Y', strtotime($invoice->due_date));

        if (!$invoice) {
            return redirect()->route('invoice.index')->with('alert', 'Invoice Not Found');
        }
        return view('invoice.show', ["invoice" => $invoice, 'setting' => $setting, 'dueDate'=>$dueDate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        $setting = Configuration::find(1);
    
        $serviceList = Service::getServices();

        $clientList = Client::getClients();

        $selectedClient = $invoice->client->id;

        $selectedService = $invoice->services()->where('invoice_id', $invoice->id)->first();

        // to do - eager load and minimize clients to 1 query
        // dd($invoice->client->all());

        $button = "Update Invoice";
        // # Create first charge object show JSON output
        // \Stripe\Stripe::setApiKey('sk_test_BNgNBLD75ASaONXdYM7aPVoq');
        // $charge = \Stripe\Charge::create(array('amount' => 100, 'currency' => 'usd', 'customer' => 'cus_BbhI1CinF1WePp' ));
        return view('invoice.edit')->with([
            'setting' => $setting,
            'serviceList' => $serviceList,
            'clientList' => $clientList,
            'button' => $button,
            'invoice' => $invoice,
            'selectedClient' => $selectedClient,
            'selectedService' => $selectedService->id,
            'selectedServiceDescription' => $selectedService->description
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'client_id' => 'required|numeric',
            'service_id' => 'required|numeric',
            'due_date' => 'required|date',
            'invoice_total' => 'required'
        ]);

        $data = $request->all();

        $data = Invoice::create($data);

        $data->services()->sync($request->service_id);


        return redirect()->route('invoice.show', $data->id)->with('alert', 'Invoice Successfully Updated');
    }

    /**
     * Remove the specified client from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);

        if (!$invoice) {
            return redirect('/invoice')->with('alert', 'Invoice Not Found');
        }

        $invoice->services()->detach();

        $invoice->delete();
    }

    public function getClient($id)
    {
        $client = Client::find($id)->toJson();
        return $client;
    }

    public function getService($id)
    {
        $service = Service::find($id)->toJson();
        return $service;
    }
}
