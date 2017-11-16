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
        return view('clients.index', ["clients"=>$clients]);
    }

    public function delete($id) {
        $client->destroy($id);
        return redirect()->back()->with('success', 'Client Successfully Deleted');
    }

    public function show($id) {
        $client = Client::findOrFail($id);
        return view('clients.show', ["client"=>$client]);
    }

    public function update(Request $request, Client $client) {
        $client->update($request->all());
        return redirect()->route('client.index')->with('success', 'Client Successfully Updated');
    }

    public function edit(Client $client) {
        // $client = Client::findOrFail($id);
        return view('clients.edit', ["client"=>$client]);
    }

    public function create() {
         return view('clients.create');
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
    	return redirect()->route('clients.index')->with('success', 'Client Successfully Created');
    }
}
