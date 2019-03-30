@extends('adminlte::page')
@section('title', 'Edit Network')
@section('content_header')
<h1>Edit Network</h1>
@stop
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>{!! Session::get('success')[0] !!}</strong>
    </div>
@endif

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Update Network Details</h3>
    </div>
    <div class="box-body">

        {!! Form::open(['method' => 'PATCH', 'route' =>['networks.update', $viewData->id]]) !!}

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', $viewData->name, ['class' => 'form-control', 'placeholder'=> 'Eg. Mobitel', 'required' => ''])
            !!}
            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {!! $errors->has('network_id') ? 'has-error' : '' !!}">
            {!! Form::label('network_id', 'Network ID') !!}
            {!! Form::text('network_id', $viewData->network_id, ['class' => 'form-control', 'placeholder'=> 'Eg.071', 'required' => ''])
            !!}
            {!! $errors->first('network_id', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="box-footer">
            {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
        </div>

        {!! Form::close() !!}
         <div class="box-footer">
        {!! Form::open(['method' => 'delete', 'route' => ['networks.destroy', $viewData->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');

</script>




















@stop
