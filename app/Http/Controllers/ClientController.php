<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use \Session;

class ClientController extends Controller
{
	/**
	* @return string
	*/
    public function index() {
    	$clients = Client::all();
        return view('client.index', ["clients"=>$clients]);
    }

    public function store(Request $request) {

    	$this->validate($request, [
        'company' => 'required|min:3',
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email|unique:clients,email',
        'phoneNumber' => 'required',
        'address' => 'required', 
    	]);

    	Client::create($request->all());
    	return redirect()->back()->with('success', 'Client Successfully Created');
    }
}
