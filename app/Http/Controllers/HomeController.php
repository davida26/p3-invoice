<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\Service;
use App\Invoice;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $invoices = Invoice::orderBy('updated_at', 'desc')->limit(10)->get();
        $clients = Client::orderBy('updated_at', 'desc')->limit(10)->get();
        $services = Service::orderBy('updated_at', 'desc')->limit(10)->get();
        return view('dashboard')->with(['clients'=>$clients, 'services'=>$services, 'invoices'=>$invoices]);
    }
}
