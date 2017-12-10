<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index() {
        return view('invoice.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $company = 'test';
       # Create first charge object show JSON output
        \Stripe\Stripe::setApiKey('sk_test_BNgNBLD75ASaONXdYM7aPVoq');
        $charge = \Stripe\Charge::create(array('amount' => 100, 'currency' => 'usd', 'customer' => 'cus_BbhI1CinF1WePp' ));
        
        return view('invoice.create')->with([
            'charge' => $charge
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        return 'Invoice Stored';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $invoice = Invoice::find($id);
        if(!$invoice) {
            return redirect()->route('invoice.index')->with('alert', 'Invoice Not Found');
        }
         return view('invoice.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
         return 'Edit invoice';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
         return 'Update Invoice';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
         return 'Delete Invoice';
    }
}
