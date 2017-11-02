<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class ClientController extends Controller
{
	/**
	 * @return string
	 */
    public function index() {
    	return 'Clients Index Page';
    }

    public function store(Request $request) {
    	$this->validate($request, [
        'company' => 'required|min:3',
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'phoneNumber' => 'required',
        'address' => 'required'
    	]);
    	Client::create($request->all());

    	return redirect()->back();
    }
    /**
     * Create a new client instance.
     *
     * @param  array  $data
     * @return \App\Client
     */
    // protected function create(array $data)
    // {
    //     return Client::create([
    //         'firstName' => $data['firstName'],
    //         'lastName' => $data['lastName'],
    //         'email' => $data['email'],
    //         'company' => $data['company'],
    //     ]);
    // }
}
