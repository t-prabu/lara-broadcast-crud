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
        {!! Form::open(['route' =>['numbers.store']]) !!}

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Eg. Name', 'required' => ''])
            !!}
            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {!! $errors->has('number') ? 'has-error' : '' !!}">
            {!! Form::label('number', 'Number') !!}
            {!! Form::text('number', null, ['class' => 'form-control', 'placeholder'=> 'Eg. 071 123 1234', 'required' => ''])
            !!}
            {!! $errors->first('number', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {!! $errors->has('numbers_network_id_foreign') ? 'has-error' : '' !!}">
                <label>Network Id</label>
                <select class="form-control select2" name="numbers_network_id_foreign" style="width: 100%;" required="">
                <option value="" ></option>
                @foreach ($viewData as $item)
                  <option value="{{ $item->network_id }}" >{{ $item->name }} - {{ $item->network_id }} </option>
                @endforeach
                </select>
            {!! $errors->first('numbers_network_id_foreign', '<span class="help-block">:message</span>') !!}
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