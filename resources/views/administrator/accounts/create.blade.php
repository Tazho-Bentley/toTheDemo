@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Account</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('accounts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'accounts.store','method'=>'POST', 'class'=>'form-horizontal')) !!}
    <!-- START card-->
    <div class="card card-default">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Name</label>
                <div class="col-xl-10">
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Address</label>
                <div class="col-xl-10">
                {!! Form::text('address', null, array('placeholder' => 'Physical Address','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Email</label>
                <div class="col-xl-10">
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Phone Number</label>
                <div class="col-xl-10">
                {!! Form::text('phone', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Account Type</label>
                <div class="col-xl-10">
                    <select name="account_type" class="custom-select custom-select-sm">
                        <option value="User">Select Account Type</option>
                        <option value="Company">Company</option>
                        <option value="Merchant">Merchant</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Company Type</label>
                <div class="col-xl-10">
                    <select name="company_type" class="custom-select custom-select-sm">
                        <option value="Company">Select Company Type</option>
                        <option value="Admin">Administrator</option>
                        <option value="Company">Company</option>
                        <option value="Merchant">Merchant</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Contact Person</label>
                <div class="col-xl-10">
                {!! Form::text('contact_person', null, array('placeholder' => 'Contact Person','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Company/Merchant ID</label>
                <div class="col-xl-10">
                {!! Form::text('company_id', null, array('placeholder' => 'Company ID Number','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Number of Employess</label>
                <div class="col-xl-10">
                {!! Form::text('employee_count', null, array('placeholder' => 'Employee Count','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Pay Schedule</label>
                <div class="col-xl-10">
                    <select name="pay_schedule" class="custom-select custom-select-sm">
                        <option value="NULL">Select Schedule Type</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Bi-Weekly">Bi-Weekly</option>
                        <option value="Semi-Monthly">Semi Monthly</option>
                        <option value="Monthly">Monthly</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Password</label>
                <div class="col-xl-10">
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Repeat Password</label>
                <div class="col-xl-10">
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Account System Roles</label>
                <div class="col-xl-10">
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xl-10">
                    <button class="btn btn-sm btn-secondary" type="submit">Create Account</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END card-->
    {!! Form::close() !!}
@endsection