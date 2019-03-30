@extends('adminlte::page')
@section('title', 'Add New Number')
@section('content_header')
<h1>Add New Number</h1>

@stop
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>{!! Session::get('success')[0] !!}</strong>
    </div>
@endif

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Add New Numbers</h3>
    </div>
    <div class="box-body">
        <div class="form-group {!! $errors->has('bulk-records-file') ? 'has-error' : '' !!} ">
            <div class="form-group js-file-field" >
               <a href="{{asset('files/numbers-bulk-template.xlsx')}}" download>Click to download, excel template for bulk addition.</a>
            </div>
        {!! Form::open(['route' =>['bulkStore'], 'files' => true]) !!}
        <input type="hidden" value="test" name="testt">
        <div class="form-group {!! $errors->has('bulk-records-file') ? 'has-error' : '' !!} ">
            <div class="form-group js-file-field">
                {!! Form::label('bulk-records-file', 'File input') !!}
                {!! Form::file('bulk-records-file', ['accept' => '.xlsx']) !!}
            </div>
        {!! $errors->first('bulk-records-file', '<span class="help-block">:message</span>') !!}
        </div>


        <div class="box-footer">
            {!! Form::submit('Add', ['class' => 'btn btn-info']) !!}
            {!! Form::button('Cancel', ['class' => 'btn', 'type' => 'reset']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>


@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');

    $(function () {
        $('.select2').select2();
    });

</script>

@stop
