

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
            <small>LOGGED-IN as</small> {{Sentry::getUser()->name}}


            <?php


            $Uid = Sentry::getUser()->id;
            $bank = BankDocName::join('bank_doc','bank_doc.bank_name','=','bank_doc_name.id')->where('bank_doc.user_id','=',$Uid)
                    ->get(array('bank_doc_name.bank_doc_name','bank_doc.bank_name','bank_doc.type','bank_doc.name_on_card','bank_doc.num_on_card','bank_doc.cvv','bank_doc.pin'));

            ?>
            @foreach($bank as $banks)
                @if(isset($banks))
            <h2>{{$banks->bank_doc_name;}}</h2>
                @endif
            @endforeach
           </div>

    </div>
    {{ Form::close() }}







@stop