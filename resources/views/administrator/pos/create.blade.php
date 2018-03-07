@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Point of Sale</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pos.index') }}"> Back</a>
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
    {!! Form::open(array('route' => 'pos.store','method'=>'POST', 'class'=>'form-horizontal')) !!}
    <!-- START card-->
    <div class="card card-default">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">POS ID</label>
                <div class="col-xl-10">
                    {!! Form::text('pos_id', null, array('placeholder' => 'Point of Sale ID','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Number</label>
                <div class="col-xl-10">
                {!! Form::text('number', null, array('placeholder' => 'Number','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">Serial Number</label>
                <div class="col-xl-10">
                    {!! Form::text('serial_number', null, array('placeholder' => 'Serial Number','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-2 col-form-label">SIM Number</label>
                <div class="col-xl-10">
                    {!! Form::text('sim_number', null, array('placeholder' => 'SIM Number','class' => 'form-control')) !!}
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
                <div class="col-xl-10">
                    <button class="btn btn-sm btn-secondary" type="submit">Create Account</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END card-->
    {!! Form::close() !!}
@endsection