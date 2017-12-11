<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use App\User;

use \Session;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ValidateClient;

class ClientController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
	/**
	* @return string
	*/
    public function index() {
    	$clients = Client::all();
        return view('clients.index', ["clients"=>$clients]);
    }

    public function destroy(Request $request, Client $client) {
        $client->delete();
    }

    public function show($id) {
        $client = Client::find($id);

        if (!$client) {
            return redirect()->route('clients.index')->with('alert', 'Client Not Found');
        }

        return view('clients.show', ["client"=>$client]);
    }

    public function update(ValidateClient $request, Client $client) {
        $client->user_id = Auth::id();
        $client->update($request->all());
        return redirect()->route('clients.index')->with('alert', 'Client Successfully Updated');
    }

    public function edit(Client $client) {
        $button = 'Update Client';
        return view('clients.edit', ["client"=>$client, "button"=>$button]);
    }

    public function create(Client $client) {
        $button = 'Save Client';
        return view('clients.create', ["button"=>$button, "client"=>$client]);
    }

    public function store(ValidateClient $request) {

        $client = new Client;
        $client->user_id = Auth::id();
        $client->company = $request->company;
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->phone_number = $request->phone_number;  
        $client->address = $request->address;
        $client->client_notes = $request->client_notes;  
        $client->optin = $request->optin;
        $client->save();


    	// Client::create($request->all());
    	return redirect()->route('clients.index')->with('alert', 'Client Successfully Created');
    }
}
