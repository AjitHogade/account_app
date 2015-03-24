

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
            <h2>All Bank Details</h2>

            <?php


            $Uid = Sentry::getUser()->id;
            $bank = BankDocName::join('bank_doc','bank_doc.bank_name','=','bank_doc_name.id')->where('bank_doc.user_id','=',$Uid)
                    ->get(array('bank_doc_name.bank_doc_name','bank_doc.bank_name','bank_doc.type','bank_doc.name_on_card','bank_doc.num_on_card','bank_doc.cvv','bank_doc.pin'));
            ?>
            <table class="table">
                <tr>
                    <th>Bank Name</th>
                    <th>Type</th>
                    <th>Name on Card</th>
                    <th>Card Number</th>
                    <th>CVV Number</th>
                    <th>Pin Number</th>
                </tr>
                @foreach($bank as $banks)
                    <tr class="option launch-modal  " data-id="{{$Uid}}">

                        <td>
                            {{$banks->bank_doc_name }}
                        </td>
                        <td>
                            {{$banks->type }}
                        </td>
                        <td>
                            {{$banks->name_on_card }}
                        </td>
                        <td>
                            {{$banks->num_on_card }}
                        </td>
                        <td>
                            {{$banks->cvv }}
                        </td>
                        <td>
                            {{$banks->pin }}
                        </td>

                    </tr>
            @endforeach
                <div class="bs-example">
                    <!-- Button HTML (to Trigger Modal) -->

                    <!-- Modal HTML -->
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Confirmation</h4>
                                </div>
                                <div class="modal-body">
                                    <?php


                                    $Uid = Sentry::getUser()->id;
                                    $bank = BankDocName::join('bank_doc','bank_doc.bank_name','=','bank_doc_name.id')->where('bank_doc.user_id','=',$Uid)
                                            ->get(array('bank_doc_name.bank_doc_name','bank_doc.bank_name','bank_doc.type','bank_doc.name_on_card','bank_doc.num_on_card','bank_doc.cvv','bank_doc.pin'));

                                    ?>
                                    @foreach($bank as $banks)
                                        @if(isset($banks->bank_doc_name))
                                            <h2>{{$banks->bank_doc_name;}}</h2>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>
    {{ Form::close() }}







@stop