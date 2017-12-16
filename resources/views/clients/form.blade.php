{{ csrf_field() }} 

<div class="form-group {{ $errors->has('company') ? ' has-error' : '' }}">
	<label for="company" class="control-label">Company</label>
	<input id="company" type="company" class="form-control" name="company" placeholder="Acme Corporation" value="{{ old('company', $client->company) }}" autofocus>
	@if ($errors->get('company'))
	<span class="help-block">
		<ul class="no-indent">
			@foreach ($errors->get('company') as $error)
			<li><strong>{{ $error }}</strong></li>
			@endforeach
		</ul>
	</span>
	@endif
</div>

<div class="row">
	<div class="col-md-12">
		<p><strong>Primary Contact</strong></p>
	</div>
	<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-6">
		<label for="first_name" class="control-label sr-only">First Name</label>
		<input id="first_name" type="first_name" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name', $client->first_name) }}"  autofocus>
		@if ($errors->has('first_name'))
		<span class="help-block">
			<strong>{{ $errors->first('first_name') }}</strong>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-md-6">
		<label for="last_name" class="control-label sr-only">Last Name</label>
		<input id="last_name" type="last_name" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name', $client->last_name) }}"  autofocus>
		@if ($errors->has('last_name'))
		<span class="help-block">
			<strong>{{ $errors->first('last_name') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
		<label for="email" class="control-label">Email</label>
		<input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email', $client->email) }}"  autofocus>
		@if ($errors->has('email'))
		<span class="help-block">
			<ul class="no-indent">
				@foreach ($errors->get('email') as $error)
				<li><strong>{{ $error }}</strong></li>
				@endforeach
			</ul>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }} col-md-6">
		<label for="phone_number" class="control-label">Phone Number</label>
		<input id="phone_number" type="phone_number" class="form-control" name="phone_number" placeholder="1234567890" value="{{ old('phone_number', $client->phone_number) }}"  autofocus>
		@if ($errors->has('phone_number'))
		<span class="help-block">
			<strong>{{ $errors->first('phone_number') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<p><strong>Address</strong></p>
	</div>
	<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }} col-md-12">
		<label for="address" class="control-label sr-only">Address</label>
		<input id="address" type="address" class="form-control" name="address" placeholder="24 Acme Rd NY, NY 10001" value="{{ old('address', $client->address) }}"  autofocus>
		@if ($errors->has('address'))
		<span class="help-block">
			<strong>{{ $errors->first('address') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<p><strong>Client Notes</strong></p>
	</div>
	<div class="form-group {{ $errors->has('client_notes') ? ' has-error' : '' }} col-md-12">
		<label for="client_notes" class="control-label sr-only">Client</label>
		<textarea id="client_notes" type="client_notes" class="form-control" name="client_notes" placeholder="Enter a note for this client" autofocus>{{ old('client_notes', $client->client_notes) }}</textarea>
		@if ($errors->has('client_notes'))
		<span class="help-block">
			<strong>{{ $errors->first('client_notes') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-inline">
		<div class="form-group {{ $errors->has('optin') ? ' has-error' : '' }} col-md-12">
			<input type="hidden" name="optin" value="0">
			<input type="checkbox" name="optin" value="1" CHECKED>
			<label for="optin" class="control-label">Subscribe to Emails?</label>
		</div>
	</div>
</div>
<div class="row">
	<div class="form-group col-md-12">
		<label for="status" class="control-label">
		<input type="hidden" id="status" name="status"  value="0">
		<input id="status" type="checkbox" name="status" {{ $client->status ? 'CHECKED' : '' }} value="1">
		Activate Client</label>
	</div>
</div>

<div class="row">
	<div class="form-group col-md-12">
		<input type="submit" value="{{ $button }}" class="btn btn-primary btn-lg pull-right">
	</div>
</div>
</form>
