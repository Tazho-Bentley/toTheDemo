@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New User</h2>
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
    {!! Form::model($user, ['method' => 'PATCH','route' => ['accounts.update', $user->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Person:</strong>
                {!! Form::text('contact_person', null, array('placeholder' => 'contact_person','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Type:</strong>
                <select name="company_type" class="form-control custom-select custom-select-sm">
                        <option value="{{$user->company_type}}">{{$user->company_type}}</option>
                        <option value="Admin">Administrator</option>
                        <option value="Company">Company</option>
                        <option value="Merchant">Merchant</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Account Type:</strong>
                <select name="account_type" class="form-control custom-select custom-select-sm">
                        <option value="{{$user->account_type}}">{{$user->account_type}}</option>
                        <option value="Admin">Administrator</option>
                        <option value="Company">Company</option>
                        <option value="Merchant">Merchant</option>
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Company/Merchant ID</label>
                <div class="col-xl-10">
                {!! Form::text('company_id', null, array('placeholder' => 'NRC Number','class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group row">
            <label class="col-xl-2 col-form-label">Number of Employees</label>
            <div class="col-xl-10">
            {!! Form::text('employee_count', null, array('placeholder' => 'Employee Count','class' => 'form-control')) !!}
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Pay Schedule</label>
                <div class="col-xl-10">
                    <select name="pay_schedule" class="custom-select custom-select-sm">
                        <option value="{{$user->pay_schedule}}">{{$user->pay_schedule}}</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Bi-Weekly">Bi-Weekly</option>
                        <option value="Semi-Monthly">Semi Monthly</option>
                        <option value="Monthly">Monthly</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection