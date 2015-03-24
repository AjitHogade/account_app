

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
            <h2>Add Document Details(Banking)</h2><br>
            @if(Session::has('done'))
                <div class="alert alert-danger" role="alert">
                  <?php  echo "Ducument is saved successfully."; ?>
                </div>
            @endif
            {{ Form::label('bank','Select Bank: ') }}
            {{ Form::select('bank_name', ['0'=>'--- Select Bank ---',
                                         '1'=>'ICICI Bank',
                                     '2'=>'HDFC Bank',
                                     '3'=>'AXIS Bank',
                                     '4'=>'CORPORATION Bank of India',
                                     '5'=>'State Bank of India',
                                     '6'=>'Canara Bank',
                                     '7'=>'Panjab National Bank',
                                     '8'=>'United Bank of India',
                                     '9'=>'Union Bank'],
                                     '0',array('class'=>'form-control')) }}<br>
            <div class="panel panel-default">
                <div class="panel-body">
            {{ Form::label('type_card','Card Type: ') }}<br>
            {{ Form::radio('type', 'Debit') }} Debit<br>
            {{ Form::radio('type', 'Credit') }} Credit</div></div><br>

            {{ Form::label('name_card','Name on Card: ') }}
            <input type="text" class="form-control" name = name_on_card id="doc_name" placeholder="Name on Document"><br>
            {{ Form::label('doc_num','16 Digit Card Number: ') }}
            <input type="text" class="form-control" name = num_on_card id="card_no" placeholder="Card number"><br>
            {{ Form::label('cvv','Enter your 3 Digit CVV no:') }}
            <input type="text" class="form-control" id="cvv" name = "cvv" placeholder="Card number"><br>
            {{ Form::label('pin','Enter PIN(optional)') }}
            <input type="text" name = "pin" class="form-control" id="pin" placeholder="Card number"><br>
            <button type="submit" class="btn btn-primary pull-right btn-lg">Go</button>
            <input type="hidden" name="doc_type" id="doc_type" value ="2">

        </div>
    </div>
    {{ Form::close() }}







@stop