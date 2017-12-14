<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Invoice;

use App\Configuration;

use App\Service;

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

        // # Create first charge object show JSON output
        // \Stripe\Stripe::setApiKey('sk_test_BNgNBLD75ASaONXdYM7aPVoq');
        // $charge = \Stripe\Charge::create(array('amount' => 100, 'currency' => 'usd', 'customer' => 'cus_BbhI1CinF1WePp' ));
        return view('invoice.create')->with(['setting' => $setting]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Invoice Stored';
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

        // $serviceList = Service::getServices();

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
    public function edit($id)
    {
        return 'Edit invoice';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'Update Invoice';
    }

    /**
     * Remove the specified client from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Invoice $invoice)
    {
        $invoice->delete();
    }
}
