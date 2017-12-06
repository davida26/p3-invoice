{{ csrf_field() }} 

<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
		<label for="name" class="control-label">Company Name</label>
		<input id="name" type="name" class="form-control" name="name" placeholder="XYZ Corporation" value="{{ $setting->name or old('name') }}"  autofocus>
		@if ($errors->has('name'))
		<span class="help-block">
			<ul class="no-indent">
				@foreach ($errors->get('name') as $error)
				<li><strong>{{ $error }}</strong></li>
				@endforeach
			</ul>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-md-6">
		<label for="phone" class="control-label">Phone Number</label>
		<input id="phone" type="phone" class="form-control" name="phone" placeholder="6462013456" value="{{ $setting->phone or old('phone') }}"  autofocus>
		@if ($errors->has('phone'))
		<span class="help-block">
			<strong>{{ $errors->first('phone') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<p><strong>Company Address</strong></p>
	</div>
	<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }} col-md-12">
		<label for="address" class="control-label sr-only">Company Address</label>
		<textarea id="address" type="address" class="form-control" name="address" placeholder="1 Broadway. New York, NY 10001" autofocus>{{ $setting->address or old('address') }}</textarea>
		@if ($errors->has('address'))
		<span class="help-block">
			<strong>{{ $errors->first('address') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group{{ $errors->has('billing_email') ? ' has-error' : '' }} col-md-6">
		<label for="billing_email" class="control-label">Billing Email</label>
		<input id="billing_email" type="billing_email" class="form-control" name="billing_email" placeholder="billing@company.com" value="{{ $setting->billing_email or old('billing_email') }}"  autofocus>
		@if ($errors->has('billing_email'))
		<span class="help-block">
			<ul class="no-indent">
				@foreach ($errors->get('billing_email') as $error)
				<li><strong>{{ $error }}</strong></li>
				@endforeach
			</ul>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('support_email') ? ' has-error' : '' }} col-md-6">
		<label for="support_email" class="control-label">Tech Support Email</label>
		<input id="support_email" type="support_email" class="form-control" name="support_email" placeholder="techSupport@company.com" value="{{ $setting->support_email or old('support_email') }}"  autofocus>
		@if ($errors->has('support_email'))
		<span class="help-block">
			<strong>{{ $errors->first('support_email') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }} col-md-6">
		<label for="logo" class="control-label">Company Logo</label>
		<input id="logo" type="logo" class="form-control" name="logo" placeholder="logo.png" value="{{ $setting->logo or old('logo') }}"  autofocus>
		@if ($errors->has('logo'))
		<span class="help-block">
			<ul class="no-indent">
				@foreach ($errors->get('logo') as $error)
				<li><strong>{{ $error }}</strong></li>
				@endforeach
			</ul>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('tax_id') ? ' has-error' : '' }} col-md-6">
		<label for="tax_id" class="control-label">Company Tax ID</label>
		<input id="tax_id" type="tax_id" class="form-control" name="tax_id" placeholder="123456789" value="{{ $setting->tax_id or old('tax_id') }}"  autofocus>
		@if ($errors->has('tax_id'))
		<span class="help-block">
			<strong>{{ $errors->first('tax_id') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group col-md-12">
		<input type="submit" value="Save Settings" class="btn btn-primary btn-lg pull-right">
	</div>
</div>
</form>
