@extends('layouts.app')

@section('title')
	Edit Invoice A100{{ $invoice->id}}
@endsection

@section('content')
<div class="col-md-8 invoice-wrp">
    <div class="row company-information">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <h1 class="pg-heading">Invoice <span class="new-tag">New</span></h1>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
            <h1 class="pg-heading invoice-number">#A100{{ $invoice->id }}</h1>
        </div>
    </div>

    <form method="POST" action="/invoice/{{ $invoice->id}}">
    	{{ method_field('PUT') }}
		@include('invoice.form')
	</form>

    <div class="row grey-bg closing-section">
        <div class="col-md-12 text-center">
            {{ $setting->support_email}} <i class="fas fa-bolt"></i> {{ $setting->website }}
        </div>
    </div>
</div>
@endsection