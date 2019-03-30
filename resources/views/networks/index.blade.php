@extends('adminlte::page')
@section('title', 'Manage Networks')
@section('content_header')
<h1>Manage Networks</h1>

@stop
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>{!! Session::get('success')[0] !!}</strong>
    </div>
@endif

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Add New Network</h3>
    </div>
    <div class="box-body">
        {!! Form::open(['route' =>['networks.store']]) !!}

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Eg. Mobitel', 'required' => ''])
            !!}
            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {!! $errors->has('network_id') ? 'has-error' : '' !!}">
            {!! Form::label('network_id', 'Network ID') !!}
            {!! Form::text('network_id', null, ['class' => 'form-control', 'placeholder'=> 'Eg.071', 'required' => ''])
            !!}
            {!! $errors->first('network_id', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="box-footer">
            {!! Form::submit('Add', ['class' => 'btn btn-info']) !!}
            {!! Form::button('Cancel', ['class' => 'btn', 'type' => 'reset']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">All Available Networks</h3>

    </div>
    <!-- /.box-header -->

    {{-- all view --}}
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Network Id</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->network_id }}</td>
                        <td><a class="btn btn-info" href="{{ route('networks.show',$item->id) }}" >
                                <i class="fa fa-edit"></i> Edit
                            </a></td>
                        <td>
                            {!! Form::open(['method' => 'delete', 'route' => ['networks.destroy', $item->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
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
