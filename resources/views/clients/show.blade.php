@extends('layouts.app')

@section('title')
    View {{ $client->company}}
@endsection

@section('content')
 <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading"> {{ $client->company }}</div>
                <div class="panel-body">
                	<p>Client Name: {{ $client->first_name }} {{ $client->last_name }}</p>
                	<p>Email: {{ $client->email }}</p>
                	<p>Phone Number: {{ $client->phone_number }}</p>
                	<p>Address: {{ $client->address }}</p>
                	<p>Notes: {{ $client->client_notes }}</p>
                    <p>Last Updated By: {{ $last_updated_by }}</p>
                	<a href="/clients/{{ $client->id }}/edit" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection