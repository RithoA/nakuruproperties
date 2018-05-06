@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
 <div id="app">
 <div class="main main-raisedlist">
    <div class="container-fluid">
                      {{ csrf_field() }}
                        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Locations Table</div>
                <div class="table-responsive">
                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%" id="table">
            <thead>
             <tr>
            <th class="text-center">#</th>
            <th class="text-center">Name</th>
            <th class="text-center">Town</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listlocations as $item)
    <tr class="item{{$item->id}}">
    <td class="text-center">{{$item->id}}</td>
    <td class="text-center">{{$item->name}}</td>
    <td class="text-center">{{$item->town_id}}</td>
    <td class="text-center"><button class="edit-modal btn btn-info"
            data-info="{{$item->id}},{{$item->name}},{{$item->town_id}}">
            <span class="material-icons">edit</span>
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="{{$item->id}},{{$item->name}},{{$item->town_id}}">
            <span class="material-icons">delete</span>
        </button></td>
       </tr>
       @endforeach
    </tbody>
</table>
                 </div>
               </div>
            </div>
        </div>
    </div> 
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>

                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fid" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="town_id">Town</label>
                            <div class="col-sm-6">
                            <select class="selectpicker" data-style="btn btn-primary btn-round" id="town_id" title="Select Town" required>
                                        <option disabled selected>Select Town</option>
                                        @foreach ($towns as $town)
                                        <option value="{{$town->id}}">{{$town->id}}. {{$town->name}}</option>
                                        @endforeach
                            </select>
                            </div>
                        </div>
                    </form>
                    <div class="deleteContent">
                        Are you Sure you want to delete <span class="dname"></span> ? <span
                            class="hidden did"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn actionBtn" id="btnDelete" data-dismiss="modal">
                            <span id="footer_action_button" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
                                    </div>
                                    </div>
</div>  
</div> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
<!--  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>

    <script>
   $(document).ready(function() {


    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        var stuff = $(this).data('info').split(',');
        fillmodalData(stuff)
        $('#myModal').modal('show');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        var stuff = $(this).data('info').split(',');
        $('.did').text(stuff[0]);
        $('.dname').html(stuff[1]);
        $('#myModal').modal('show');
    });
function fillmodalData(details){
    $('#fid').val(details[0]);
    $('#name').val(details[1]);
    $('#town_id').val(details[2]);
  }

});

</script>

<script type="text/javascript">
  $(document).ready(function() {

    $('.modal-footer').on('click', '.edit', function() {
        console.log('response');
        $.ajax({
            type: 'post',
            url: '/editlocation',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#name').val(),
                'town_id': $('#town_id').val()
            },
            success: function(data) {
                if (data.errors){
                    $('#myModal').modal('show');
                    if(data.errors.name) {
                        $('.name_error').removeClass('hidden');
                        $('.name_error').text("Name must be a valid one !");
                    }
                }
                 else {
                     
                     $('.error').addClass('hidden');
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td class='text-center'>" +
                        data.id + "</td><td class='text-center'>" + data.name + "</td><td class='text-center'>" + data.town_id + "</td><td class='text-center'><button class='edit-modal btn btn-info' data-info='" + data.id+","+data.name+"'><span class='material-icons'>edit</span></button> <button class='delete-modal btn btn-danger' data-info='" + data.id+","+data.name+"'><span class='material-icons'>delete</span></button></td></tr>");
                 }}
        });
    });

    $('.modal-footer').on('click', '.delete', function() {
         console.log('response');
        $.ajax({
            type: 'post',
            url: '/deletelocation',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });

});
</script>
@endsection
