
@extends('adminlte::page')
@section('title', 'Update Numbers')
@section('content_header')
<h1>Update Numbers</h1>

@stop
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>{!! Session::get('success')[0] !!}</strong>
    </div>
@endif

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Update Number</h3>
    </div>
    <div class="box-body">
        {!! Form::open(['method' => 'PATCH', 'route' =>['numbers.update', $viewData->id]]) !!}

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', $viewData->name, ['class' => 'form-control', 'placeholder'=> 'Eg. Name', 'required' => ''])
            !!}
            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {!! $errors->has('number') ? 'has-error' : '' !!}">
            {!! Form::label('number', 'Number') !!}
            {!! Form::text('number', $viewData->number, ['class' => 'form-control', 'placeholder'=> 'Eg. 071 123 1234', 'required' => ''])
            !!}
            {!! $errors->first('number', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {!! $errors->has('numbers_network_id_foreign') ? 'has-error' : '' !!}">
                <label>Network Id</label><br><small>Current Network Id {{$viewData->numbers_network_id_foreign}} - If added Bulk the network info wont be avialable in the selection first add the data to the DB</small>
                <select class="form-control select2" name="numbers_network_id_foreign" style="width: 100%;" required="" value="{{$viewData->numbers_network_id_foreign}}">
                <option value="" ></option>
                @foreach ($subdata as $item)
                  <option value="{{ $item->network_id }}" >{{ $item->name }} - {{ $item->network_id }} </option>
                @endforeach
                </select>
            {!! $errors->first('numbers_network_id_foreign', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="box-footer">
            {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
        </div>

        {!! Form::close() !!}
        <div class="box-footer">
            {!! Form::open(['method' => 'delete', 'route' => ['numbers.destroy', $viewData->id]]) !!}
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

    $(function () {
        $slect2Elem = $('.select2');
        $slect2Elem.val($slect2Elem.attr('value'));
        $slect2Elem.select2();
    });

</script>




















@stop
