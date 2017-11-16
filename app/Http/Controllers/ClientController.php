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

    public function delete($id) {
        $client->destroy($id);
        return redirect()->back()->with('success', 'Client Successfully Deleted');
    }

    public function show($id)
    {
        $client = Client::find($id);
    }

    public function store(Request $request) {

    	$this->validate($request, [
        'company' => 'required|min:3',
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:clients,email',
        'phone_number' => 'required',
        'address' => 'required', 
    	]);

    	Client::create($request->all());
    	return redirect()->back()->with('success', 'Client Successfully Created');
    }
}
