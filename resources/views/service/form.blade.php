{{ csrf_field() }} 

<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
		<label for="name" class="control-label">Service Name</label>
		<input id="name" type="name" class="form-control" name="name" placeholder="Regular Consultation Fee" value="{{ $service->name or old('name') }}"  autofocus>
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
	<div class="form-group{{ $errors->has('list_price') ? ' has-error' : '' }} col-md-6">
		<label for="list_price" class="control-label">List Price</label>
		<input id="list_price" type="list_price" class="form-control" name="list_price" placeholder="100.00" value="{{ $service->list_price or old('list_price') }}"  autofocus>
		@if ($errors->has('list_price'))
		<span class="help-block">
			<strong>{{ $errors->first('list_price') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group{{ $errors->has('sale_price') ? ' has-error' : '' }} col-md-6">
		<label for="sale_price" class="control-label">Sale Price</label>
		<input id="sale_price" type="sale_price" class="form-control" name="sale_price" placeholder="85.00" value="{{ $service->sale_price or old('sale_price') }}"  autofocus>
		@if ($errors->has('sale_price'))
		<span class="help-block">
			<ul class="no-indent">
				@foreach ($errors->get('sale_price') as $error)
				<li><strong>{{ $error }}</strong></li>
				@endforeach
			</ul>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }} col-md-6">
		<label for="cost" class="control-label">Cost</label>
		<input id="cost" type="cost" class="form-control" name="cost" placeholder="80.00" value="{{ $service->cost or old('cost') }}"  autofocus>
		@if ($errors->has('cost'))
		<span class="help-block">
			<strong>{{ $errors->first('cost') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<p><strong>Description</strong></p>
	</div>
	<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }} col-md-12">
		<label for="description" class="control-label sr-only">service</label>
		<textarea id="description" type="description" class="form-control" name="description" placeholder="Describe this service in detail. Shown to customer on invoice." autofocus>{{ $service->description or old('description') }}</textarea>
		@if ($errors->has('description'))
		<span class="help-block">
			<strong>{{ $errors->first('description') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group col-md-12">
		<input type="submit" value="{{ $button }}" class="btn btn-primary btn-lg pull-right">
	</div>
</div>
</form>
