@push('styles-header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"></link>
@endpush

{{ csrf_field() }} 
<div class="row company-information">
	<div class="col-md-6 col-sm-6 col-xs-6">
		<p><strong>Bill To:</strong></p>
		<div class="form-group{{ $errors->has('client_id') ? ' has-error' : '' }}" > 
			<label for="client_id" class="control-label sr-only">Client</label>
			<select id="client_id" class="form-control" name="client_id">
				<option value="" selected="selected" disabled="disabled" hidden>Select a Client</option>
				@foreach ($clientList as $id => $company)
				<option value="{{$id}}" @isset($selectedClient){{ $selectedClient == $id ? 'selected="selected"' : ''}}@endisset {{ old('client_id') == $id ? 'selected="selected"' : '' }}>{{ $company or old('company') }}</option>
				@endforeach
			</select>
			@if ($errors->has('client_id'))
			<span class="help-block">
				<strong>{{ $errors->first('client_id') }}</strong>
			</span>
			@endif
			<div class="client-data">
				<p class="client-name">@isset($invoice){{ $invoice->client['first_name'] }} {{ $invoice->client['last_name'] }}@endisset</p>
				<p class="client-address">@isset($invoice){{ $invoice->client['address'] }}@endisset</p>
				<p class="client-email">@isset($invoice){{ $invoice->client['email'] }}@endisset</p>
				<p class="client-phone">@isset($invoice){{ $invoice->client['phone_number'] }}@endisset</p>
			</div>
		</div>
	</div>
	<div class="col-md-offset-3 col-md-3 col-sm-6 col-xs-6 text-right">
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
					<th>Qty</th>
					<th>Rate</th>
					<th>Total</th>
				</tr> 
			</thead>
			<tbody> 
				<tr>
					<td class="col-md-4">
						<div class="form-group{{ $errors->has('service_id') ? ' has-error' : '' }}" > 
							<label for="service_id" class="control-label sr-only">Service</label>
							<select id="service_id" class="form-control" name="service_id">
								<option value="1" selected="selected" disabled="disabled">Select a service</option>
								@foreach ($serviceList as $id => $name)
								<option value="{{ $id or old('id') }}" @isset($selectedService){{ $selectedService == $id ? 'selected="selected"' : '' }}@endisset {{ old('service_id') == $id ? 'selected="selected"' : '' }}>{{ $name or old('name') }}</option>
								@endforeach
							</select>
							@if ($errors->has('service_id'))
							<span class="help-block">
								<strong>{{ $errors->first('service_id') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td class="col-md-5">
						<p class="service-description">{{{ isset($invoice) ? $selectedService : 'Service Description'}}}</p>
					</td>
					<td class="col-md-1">
						<div class="form-group" > 
							<label for="quantity" class="control-label sr-only">Service</label>
							<input type="text" class="form-control text-center quantity" placeholder="1" name="quantity" id="quantity_1" value="1">
						</div>
					</td>
					<td class="col-md-1">
						<p id="rate_1" class="service-rate">10.00</p>
					</td>
					<td class="col-md-1">
						<p id="line_total_1" class="line-total"></p>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="text-center add-service"><i class="fas fa-plus-circle"></i> Add Service</p>
	</div>
</div>


<div class="row grey-bg">
	<div class="col-md-4 terms-info">
		<h3>Terms</h3>
		<p> Terms section here must be loaded from the settings page configuration.</p>
	</div>
	<div class="col-md-4 due-date">
		<h3>Due By</h3>
		<div id="datepicker" class="form-group date {{ $errors->has('due_date') ? ' has-error' : '' }}">
			<input type="text" class="form-control" placeholder="Select Due Date" name="due_date" value="{{ $invoice->due_date or old('due_date') }}">
			@if ($errors->has('due_date'))
			<span class="help-block">
				<strong>{{ $errors->first('due_date') }}</strong>
			</span>
			@endif
		</div>
		<input type="submit" value="{{ $button }}" class="btn btn-primary btn-block btn-lg">
	</div>

	<div class="col-md-4 total-due">
		<h3>Total Due</h3>
		<div class="form-group {{ $errors->has('invoice_total') ? ' has-error' : '' }}">
			<label for="list_price" class="control-label sr-only">Invoice Total</label>
			<input id="invoice_total" type="text" class="form-control" name="invoice_total" placeholder="100.00" value="{{ $invoice->invoice_total or old('invoice_total') }}"  autofocus>
			@if ($errors->has('invoice_total'))
			<span class="help-block">
				<strong>{{ $errors->first('invoice_total') }}</strong>
			</span>
			@endif
		</div>
	</div>
</div>

@push('scripts-footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('js/getData.js') }}"></script>
@endpush