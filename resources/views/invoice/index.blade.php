@extends('layouts.app')
@section('title')
View Invoices
@endsection

@section('content')
<h2 class="pg-heading">Invoices <a href="{{route('invoice.create')}}" class="btn btn-success">New Invoice</a></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Invoice No</th>
                <th>Client</th>
                <th>Due On</th>
                <th>Invoice Total</th>
                <th>Paid?</th>
                </tr> 
        </thead>
        <tbody> 
           {{--  @foreach ($clients as $client)
            <tr id="{{ $client->id }}"> 
                    <td>{{ $client->first_name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->company }}</td>
                    <td>{{ $client->phone_number }}</td>
                    <td>{{ $client->email }}</td>
                    <td><a href="clients/{{ $client->id }}">View</a> | <a href="clients/{{ $client->id }}/edit">Edit</a> | <a class="deleteClient" href="#">Delete</a></td>
            </tr>
            @endforeach --}}
            <tr>
                <td><a href="#">124862</a></td>
                <td>Acme Corporation</td>
                <td>12/17/2018</td>
                <td>$500.00</td>
                <td>No</td>
            </tr>
         </tbody> 
    </table>
@endsection
