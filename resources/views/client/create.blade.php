@extends('layouts.app')
@section('title')
New Client
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2-dash">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Client</div>

                <div class="panel-body">
                    <form method="POST" action="/clients/create">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="control-label">Company</label>
                            <input id="company" type="company" class="form-control" name="company" placeholder="Acme Corporation" value="{{ old('company') }}" autofocus>
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
                            <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }} col-md-6">
                                <label for="firstName" class="control-label sr-only">First Name</label>
                                <input id="firstName" type="firstName" class="form-control" name="firstName" placeholder="First Name" value="{{ old('firstName') }}"  autofocus>
                                @if ($errors->has('firstName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }} col-md-6">
                                <label for="lastName" class="control-label sr-only">Last Name</label>
                                <input id="lastName" type="lastName" class="form-control" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}"  autofocus>
                                @if ($errors->has('lastName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                                <label for="email" class="control-label">Email</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="First Name" value="{{ old('email') }}"  autofocus>
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
                            <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }} col-md-6">
                                <label for="phoneNumber" class="control-label">Phone Number</label>
                                <input id="phoneNumber" type="phoneNumber" class="form-control" name="phoneNumber" placeholder="1234567890" value="{{ old('phoneNumber') }}"  autofocus>
                                @if ($errors->has('phoneNumber'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phoneNumber') }}</strong>
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
                                <input id="address" type="address" class="form-control" name="address" placeholder="24 Acme Rd NY, NY 10001" value="{{ old('address') }}"  autofocus>
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
                            <div class="form-group {{ $errors->has('clientNotes') ? ' has-error' : '' }} col-md-12">
                                <label for="clientNotes" class="control-label sr-only">Client</label>
                                <textarea id="clientNotes" type="clientNotes" class="form-control" name="clientNotes" placeholder="Enter a note for this client" value="{{ old('clientNotes') }}" autofocus></textarea>
                                @if ($errors->has('clientNotes'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('clientNotes') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group {{ $errors->has('optin') ? ' has-error' : '' }} col-md-12">
                                    <input id="optin" type="checkbox" class="optin" name="optin" value="1" CHECKED>
                                    <label for="optin" class="control-label">Subscribe to Emails?</label>
                                    @if ($errors->has('optin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('optin') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" value="Create" class="btn btn-primary btn-lg pull-right">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
