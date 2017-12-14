@extends('layouts.app')

@section('title')
    Invoice A100{{ $invoice->id}}
@endsection

@section('content')
 <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Invoice #A100{{ $invoice->id}} <span class="pull-right">Total Due: ${{ $invoice->invoice_total}}</span></div>
                <div class="panel-body">
                	<p>Client Company: {{ $invoice->client->company }}</p>
                	<p>Client Name: {{ $invoice->client->first_name }} {{ $invoice->client->last_name }}</p>
                	<p>Email: {{ $invoice->client->email }}</p>
                	<p>Phone Number: {{ $invoice->client->phone_number }}</p>
                	<p>Address: {{ $invoice->client->address }}</p>
                	<a href="/invoice/{{ $invoice->id }}/edit" class="btn btn-primary">Edit</a>
                	<a href="/invoice" class="btn btn-default">View All</a>
                </div>
            </div>
        </div>
    </div>
@endsection