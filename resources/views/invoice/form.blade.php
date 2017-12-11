<div class="row">
	<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }} col-md-8" > 
		<h3 class="pg-heading">Client</h3>
		<label for="company" class="control-label sr-only">First Name</label>
		<input id="company" type="company" class="form-control" name="company" placeholder="Type a client email or company name" value=""  autofocus>
		@if ($errors->has('company'))
		<span class="help-block">
			<strong>{{ $errors->first('company') }}</strong>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }} col-md-4" > 
		<h3 class="pg-heading">Due Date</h3>
		<label for="company" class="control-label sr-only">First Name</label>
		<input id="company" type="company" class="form-control" name="company" placeholder="Type a client email or company name" value=""  autofocus>
		@if ($errors->has('company'))
		<span class="help-block">
			<strong>{{ $errors->first('company') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
	        <thead>
	            <tr>
	                <th>Description</th>
	                <th>Rate</th>
	                <th>Quantity</th>
	                <th>Subtotal</th>
	            </tr> 
	        </thead>
	        <tbody> 
	        	<tr>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Service Description</label>
							<input id="company" type="dropdown" class="form-control" name="company" placeholder="Select a service" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Rate</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Rate" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Quantity</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Quantity" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Subtotal</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Subtotal" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
	        	</tr>
	        	<tr>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Service Description</label>
							<input id="company" type="dropdown" class="form-control" name="company" placeholder="Select a service" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Rate</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Rate" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Quantity</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Quantity" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Subtotal</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Subtotal" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
	        	</tr>
	        	<tr>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Service Description</label>
							<input id="company" type="dropdown" class="form-control" name="company" placeholder="Select a service" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Rate</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Rate" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Quantity</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Quantity" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
					<td>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" > 
							<label for="company" class="control-label sr-only">Subtotal</label>
							<input id="company" type="company" class="form-control" name="company" placeholder="Service Subtotal" value=""  autofocus>
							@if ($errors->has('company'))
							<span class="help-block">
								<strong>{{ $errors->first('company') }}</strong>
							</span>
							@endif
						</div>
					</td>
	        	</tr>
	        	<tr>
	        		<td colspan="4">
	        			<p class="add-service text-center"><i class="fas fa-plus-square"></i> Add Service</p>
	        		</td>
	        	</tr>
	        </tbody>
	    </table>
	</div>
</div>