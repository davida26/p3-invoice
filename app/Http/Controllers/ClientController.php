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

    public function destroy(Request $request, Client $client) {
        $client->delete();
        // return redirect()->back()->with('alert', 'Client Successfully Deleted');
    }

    public function show($id) {
        $client = Client::find($id);

        if (!$client) {
            return redirect()->route('clients.index')->with('alert', 'Client Not Found');
        }

        return view('clients.show', ["client"=>$client]);
    }

    public function update(Request $request, Client $client) {
        $client->update($request->all());
        return redirect()->route('clients.index')->with('alert', 'Client Successfully Updated');
    }

    public function edit(Client $client) {
        $button = 'Update Client';
        return view('clients.edit', ["client"=>$client, "button"=>$button]);
    }

    public function create() {
        $button = 'Save Client';
         return view('clients.create', ["button"=>$button]);
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
    	return redirect()->route('clients.index')->with('alert', 'Client Successfully Created');
    }
}
