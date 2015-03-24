

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
            <h2>All Government Documents</h2>

            <?php


            $Uid = Sentry::getUser()->id;
            $document = GovDocName::join('gov_doc','gov_doc.doc_name','=','gov_doc_name.id')->where('gov_doc.user_id','=',$Uid)
                    ->get(array('gov_doc_name.gov_doc_name','gov_doc_name.id','gov_doc.name_on_doc','gov_doc.num_on_doc'));
            ?>
            <table class="table">
                <tr>
                    <th>Document Name</th>
                    <th>Name on Document</th>
                    <th>Document Number</th>
                </tr>
                @foreach($document as $documents)

                    <tr class="option" data-id="{{$Uid}}">

                        <td>
                            {{$documents->gov_doc_name;}}
                        </td>
                        <td>
                            {{ $documents->name_on_doc;}}
                        </td>
                        <td>
                            {{ $documents->num_on_doc; }}
                        </td>
<td>
                        <button type="button" class="btn btn-sm btn-primary"
                                onclick="update('{{$documents->id}}','{{$documents->gov_doc_name}}')">Update
                        </button>
</td>

                    </tr>
            @endforeach


        </div>


    </div>

    <!-- Modal -->
    <div class="modal fade" id="company-about" tabindex="-1" role="dialog" aria-labelledby="company-about-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="company-about-label">Company Name</h4>
                </div>
                <div class="modal-body">
                    <p>Company summary...</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal -->
    <div class="modal fade" id="pancard_status_modal" tabindex="-1" role="dialog" aria-labelledby="fee-details-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="fee-details-label">Fee Details</h4>
                </div>
                <div class="modal-body">
                    <table id="client_status_table" class="table table-striped table-hover view_entries_table">

                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Message</th>
                        </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        function update(id,gov_doc_name) {

            alert(id);
            //alert(from);
            //  alert(to);
            //  return false;
            $.ajax({

                type: "GET",
                url: "gov_doc_id",
                data: {
                    'id': id,
                    'gov_doc_name':gov_doc_name

                },

                success: function (data) {
                    response = $.parseJSON(data);
                    if (id == 1)
                        updatePancardModal(response, gov_doc_name);
                    else if (id == 2)
                        updateSalesModal(response, model);
                    else if (id == 3)
                        updateGoodsReturnModal(response, model);
                    else if (id == 4)
                        updateRetailSalesModal(response, model);
                    else if (id == 5)
                        updateSalesGroupModal(response, model);
                    else if (id == 6)
                        updatePaymentsModal(response, model);
                    else {
                        alert("error")
                    }
                    ajaxindicatorstop();
                }

            });

        }

        function updatePancardModal(response,gov_doc_name ) {
            alert(response);
            var tableRows = '';
            var data = response.length;
            $("#pancard_status_modal").modal();
                if(data!=""){
                    alert(data);
                    var result = "<table class='table'><tr><h3>Search Result</h3>";
                    result += "<td>"+data.id+"</td>";
                    result += '<td>"+data.gov_doc_name+"</td>';
                    result += "</tr></table>";
                    var result_div = $("#result");
                    result_div.empty();
                    result_div.append(result);
                }else{

                    alert("There is no such user");
                }

                    }
    </script>
    {{ Form::close() }}



    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>



@stop