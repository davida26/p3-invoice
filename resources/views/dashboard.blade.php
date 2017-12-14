@section('title')
Dashboard
@endsection

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Latest Invoices</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Invoice #</th>
                                <th>Client Name</th>
                                <th>Amount Due</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            @foreach ($invoices as $invoice)
                            <tr> 
                                <td><a href="invoice/{{ $invoice->id }}">A100{{ $invoice->id }}</a></td>
                                <td>{{ $invoice->client->first_name }} {{ $invoice->client->last_name }}</td>
                                <td>$ {{ $invoice->invoice_total }}</td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    <a href="/invoice" class="btn btn-default center-block shadow">View All</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 dash-items">
            <div class="panel panel-primary">
                <div class="panel-heading">New Clients Added</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Client Name</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            @foreach ($clients as $client)
                            <tr> 
                                <td><a href="clients/{{ $client->id }}">{{ $client->company }}</a></td>
                                <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    <a href="/clients" class="btn btn-default center-block shadow">View All</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Services Recently Updated</div>

                <div class="panel-body">
                 <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Client Name</th>
                        </tr> 
                    </thead>
                    <tbody> 
                        @foreach ($services as $service)
                        <tr> 
                            <td><a href="service/{{ $service->id }}">{{ $service->name }}</a></td>
                            <td>{{ $service->description }}</td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
                <a href="/service" class="btn btn-default center-block shadow">View All</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
