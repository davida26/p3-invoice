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
                <th>Options</th>
                </tr> 
        </thead>
        <tbody> 
            @foreach ($invoices as $invoice)
            <tr id="{{ $invoice->id }}"> 
                <td><a href="invoice/{{ $invoice->id }}">A100{{ $invoice->id }}</a></td>
                <td>{{ $invoice->client->first_name }} {{ $invoice->client->last_name }}</td>
                <td>{{ $invoice->due_date }}</td>
                <td>$ {{ $invoice->invoice_total }}</td>
                <td><a href="invoice/{{ $invoice->id }}">View</a> | <a href="invoice/{{ $invoice->id }}/edit">Edit</a> | <a class="deleteClient" href="#">Delete</a></td>
            </tr>
            @endforeach
         </tbody> 
    </table>
@endsection

@push('scripts-footer')
    <script type="text/javascript" src="{{ asset('js/delInvoice.js') }}"></script>
@endpush
