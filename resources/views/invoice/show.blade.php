@extends('layouts.app')

@section('title')
Invoice A100{{ $invoice->id}}
@endsection

@section('content')
<div class="col-md-8 invoice-wrp">
    <div class="row company-information">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <h1 class="pg-heading">Invoice</h1>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
            <h1 class="pg-heading invoice-number">#A100{{ $invoice->id}}</h1>
        </div>
    </div>

    <div class="row company-information">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <p><strong>Bill To:</strong></p>
            <p>{{ $invoice->client->company }}</p>
            <p>{{ $invoice->client->first_name }} {{ $invoice->client->last_name }}</p>
            <p>{{ $invoice->client->address }}</p>
            <p>{{ $invoice->client->email }}</p>
            <p>{{ $invoice->client->phone_number }}</p>
        </div>
        <div class="col-md-offset-3 col-md-3 col-sm-3 col-xs-3 text-right">
            <h2>{{ $setting->name}}</h2>
            <p>{{ $setting->address}}</p>
            <p>{{ $setting->billing_email}}</p>
            <p>{{ $setting->phone}}</p>
        </div>
    </div>

    <div class="row service-items">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Rate</th>
                        <th class="text-center">Quantity</th>
                        <th>Total</th>
                    </tr> 
                </thead>
                <tbody> 
                    @foreach ($services as $service)
                    <tr class="service_id" data-value="{{ $service['id'] }}">
                        <td class="service_name_{{ $service['id']}}">{{ $service['name'] }}</td>
                        <td class="service_description_{{ $service['id']}}">{{ $service['description']}}</td>
                        <td class="service_rate_{{ $service['id']}}">{{ $service['sale_price']}}</td>
                        <td class="text-center service_qty_{{ $service['id']}}">{{ $service['quantity']}}</td>
                        <td class="service_total_{{ $service['id']}}">Total</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="row grey-bg">
        <div class="col-md-4 terms-info">
            <h3>Terms</h3>
            <p> Terms section here must be loaded from the settings page configuration.</p>
        </div>
        <div class="col-md-4 due-date">
            <h3>Due By</h3>
            <p>{{ $dueDate }}</p>
        </div>
        <div class="col-md-4 total-due">
            <h3>Total Due</h3>
            <p class="text-center">$ {{ $invoice->invoice_total}}</p>
            <a href="#" class="btn btn-success btn-lg center-block"><i class="fas fa-lock"></i> Pay Invoice</a>
            <p class="stripe-msg text-center">Payments Secured by <i class="fab fa-cc-stripe"></i></p>
        </div>
    </div>

    <div class="row grey-bg closing-section">
        <div class="col-md-12 text-center">
            {{ $setting->support_email}} <i class="fas fa-bolt"></i> {{ $setting->website }}
        </div>
    </div>
</div>
@endsection

@push('scripts-footer')
<script src="{{ asset('js/getService.js') }}"></script>
@endpush