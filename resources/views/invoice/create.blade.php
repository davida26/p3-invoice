@extends('layouts.app')

@section('title')
	New Invoice
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 invoice-wrp">
        	<div class="row company-information">
	        	<div class="col-md-6 col-sm-6 col-xs-6">
	        		<h1 class="pg-heading">{{ $setting->name}}</h1>
	        		<p>{{ $setting->address}}</p>
	        		<p>{{ $setting->phone}}</p>
	        		<p>{{ $setting->billing_email}}</p>
	        	</div>
	        	<div class="col-md-6 col-sm-6 col-xs-6 text-right">
	        		<h2 class="pg-heading" >Invoice</h2>
	        		<p class="invoice-number">#A26191</p>
	        	</div>
        	</div>
            <form method="POST" action="/invoice">
                @include('invoice.form')
            </form>
			
			<div class="row grey-bg">
				<div class="col-md-4 terms-info">
					<h3>Terms</h3>
					<p> Terms section here must be loaded from the settings page configuration.</p>
				</div>
				<div class="col-md-4 due-date">
					<h3>Due By</h3>
					<p>December 12, 2017</p>
				</div>
				<div class="col-md-4 total-due">
					<h3>Total Due</h3>
					<p class="text-center">$ 2500.17</p>
					<a href="#" class="btn btn-success btn-lg center-block"><i class="fas fa-lock"></i> Pay Invoice</a>
					<p class="stripe-msg text-center">Payments Secured by <i class="fab fa-cc-stripe"></i></p>
				</div>
			</div>

			<div class="row grey-bg closing-section">
				<div class="col-md-12 text-center">
					{{ $setting->support_email}} <i class="fas fa-bolt"></i> website.com {{-- {{ $setting->website }} --}}
				</div>
			</div>
        </div>
    </div>
</div>
@endsection