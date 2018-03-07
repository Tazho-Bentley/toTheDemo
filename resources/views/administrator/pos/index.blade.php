@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Point of Sale Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pos.create') }}"> Create New POS</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>POS ID</th>
            <th>Number</th>
            <th>Serial Number</th>
            <th>SIM Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ $user->pos_id }}</td>
                <td>{{ $user->number }}</td>
                <td>{{ $user->serial_number }}</td>
                <td>{{ $user->sim_number }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('pos.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pos.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['pos.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->render() !!}
@endsection