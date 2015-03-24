

@extends('layout.basic')<br><br><br>
@section('content')
    {{Form::open(array('action'=>'DocumentController@select','id'=>'contactform','file'=>true,'method' => 'post'))}}
    <div class="row">
        <div class="row col-lg-3">
            @include('layout.accord')
        </div>
        <div class="row col-lg-1">
        </div>

        <div class="row col-lg-8">
<h2>Select Document Type</h2><br>

            {{ Form::select('doc', ['0'=>'--- Select Document Type ---',
                                     '1'=>'Government Document','2'=>'Banking Documents'],
                                     '0',array('class'=>'form-control')) }}<br>
            @if(Session::has('error'))
                <div class="alert alert-warning" role="alert">
                    Please select Document Type
                </div>
            @endif
            <button type="submit" class="btn btn-primary pull-right btn-lg">Go</button>
                </div>
            </div>
    {{ Form::close() }}







@stop