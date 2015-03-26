

@extends('layout.basic')<br><br><br>
@section('content')
   
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
                </table>
            @endforeach


        </div>


    </div>





<div class="modal fade" id="pancard_status_modal" tabindex="-1" role="dialog" aria-labelledby="fee-details-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="fee-details-label">Fee Details</h4>
            </div>
            <div class="modal-body">
                <table id="doc_status_table" class="table table-striped table-hover view_entries_table">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>DOC Name</th>
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
var tableRows = '';
var data_count = response.length;
$("#pancard_status_modal").modal();

if(data_count > 0){
    $.each(response, function(i, item) {
        tableRows += "<tr>";
        tableRows += "<td>"+item.id+"</td>";
        tableRows += "<td>"+item.gov_doc_name+"</td>";
        tableRows += "</tr>";
     });
   $('#doc_status_table > tbody:last').empty();
    $('#doc_status_table > tbody:last').append(tableRows);
}else{
alert("There is no such user");
}
}
    </script>
@stop