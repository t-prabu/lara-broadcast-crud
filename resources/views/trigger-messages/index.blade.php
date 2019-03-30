@extends('adminlte::page')
@section('title', 'Trigger Messages')
@section('content_header')
<h1>Manage Messages</h1>

@stop
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>{!! Session::get('success')[0] !!}</strong>
    </div>
@endif

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Send Messages</h3>
    </div>
    <div class="box-body">
        {!! Form::open(['url' => '#']) !!}

        <div class="form-group">
            {!! Form::label('num_messages', 'Number of Messages') !!}
            {!! Form::text('num_messages', null, ['class' => 'form-control', 'placeholder'=> '(imput box Ex, "1000")', 'required' => '']) !!}
          
        </div>

        <div class="form-group">
            <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" class="js-msg-src-radio" name="msg-src" id="msg-src-radio" value="bulk" >
                      Bulk upload
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" class="js-msg-src-radio" name="msg-src" id="msg-src-radio" value="list" checked="">
                      Select from existing list
                    </label>
                  </div>
                </div>
          
        </div>

        <div class="form-group js-file-field" style="display:none;">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
        </div>

        <div class="form-group">
            <div class="form-group">
                  <label for="num_messages">Message body</label>
                  <textarea class="form-control js-textarea-input" rows="4" placeholder="Messages" required=""></textarea>
                  <span class="help-block">Character Count : <span class="js-text-length-count">0</span> </span>
                </div>
          
        </div>

        

        <div class="box-footer">
            {!! Form::submit('Add', ['class' => 'btn btn-info']) !!}
            {!! Form::button('Cancel', ['class' => 'btn js-fm-reset', 'type' => 'reset']) !!}
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
    $(function () {
        $('.js-msg-src-radio').on(' change',function(){
            if($('.js-msg-src-radio:checked').val() == 'bulk'){
                    $('.js-file-field').slideDown();
            }else if($('.js-msg-src-radio:checked').val() == 'list'){
                    $('.js-file-field').slideUp();
            }
        });
        $('.js-fm-reset').on('click',function(){
           setTimeout(() => {
               document.querySelector(".js-text-length-count").innerHTML = 0;
               
                if($('.js-msg-src-radio:checked').val() == 'bulk'){
                    $('.js-file-field').slideDown();
            }else if($('.js-msg-src-radio:checked').val() == 'list'){
                    $('.js-file-field').slideUp();
            }
           }, 0);
        });
    });

    document.querySelector(".js-textarea-input").addEventListener("keyup", function (event) {
        document.querySelector(".js-text-length-count").innerHTML = this.value.length;
    });

</script>




















@stop
