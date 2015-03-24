

@extends('layout.basic')<br><br><br>
@section('content')
    {{Form::open(array('action'=>'DocumentController@insert','id'=>'contactform','file'=>true,'method' => 'post'))}}
    <div class="row">
        <div class="row col-lg-3">
            @include('layout.accord')
        </div>
        <div class="row col-lg-1">
        </div>

        <div class="row col-lg-8">
            <h2>Add Document Details(Government)</h2><br>
            <div class="form-group">
            <div class="form-group">
            {{ Form::label('doc_name','Select Document Name: ') }}
            {{ Form::select('name', ['0'=>'--- Select Document Type ---',
                                     '1'=>'Pan-Card',
                                     '2'=>'Driving-Licience',
                                     '3'=>'Adhar-Card',
                                     '4'=>'Voting-Card',
                                     '5'=>'Pass-Port',
                                     '6'=>'Ration-Card',
                                     '7'=>'Other'],
                                     '0',array('class'=>'form-control')) }}</div>
            </div>
            <div class="form-group">
                <div class="form-group">
            {{ Form::label('name_doc','Name on Document: ') }}
            <input type="text" class="form-control"  name="name_on_doc" placeholder="Name on Document">
        </div>


            <div class="form-group">
                <div class="form-group">
        {{ Form::label('doc_num','Number on Document: ') }}
            <input type="text" class="form-control" name="num_on_doc" placeholder="Number on Document"></div>

            </div>
           {{ Form::label('img','Upload Image: ') }}
            <input type="file" id="InputFile">
            <p class="help-block">Upload the image of your document here.</p><br>
            <button type="submit" class="btn btn-primary pull-right btn-lg">Go</button><br><br><br>
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    You have succesfully added document.
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-success" role="alert">
                    you have already registered this document.
                </div>
            @endif



            <input type="hidden" name="doc_type" id="doc_type" value ="1">


        </div>

    </div>
    {{ Form::close() }}







@stop