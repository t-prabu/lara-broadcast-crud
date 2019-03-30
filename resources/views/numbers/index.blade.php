@extends('adminlte::page')
@section('title', 'Manage Numbers')
@section('content_header')
<h1>Manage Numbers</h1>



@stop
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>{!! Session::get('success')[0] !!}</strong>
    </div>
@endif

    {{-- all view --}}
  <div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">All Available Numbers</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Network</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
@foreach ($viewData as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->number }}</td>
                        <td>{!! $item->getNetwork() !!}</td>
                        <td><a class="btn btn-info" href="{{ route('numbers.show',$item->id) }}" >
                                <i class="fa fa-edit"></i> Edit
                            </a></td>
                        <td>
                            {!! Form::open(['method' => 'delete', 'route' => ['numbers.destroy', $item->id]]) !!}
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
