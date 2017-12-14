@section('title')
Dashboard
@endsection

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Latest Invoices Updated</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Show last 10 invoices updated here.
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
