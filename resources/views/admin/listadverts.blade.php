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
                <div class="panel-heading">Users Table</div>
                <div class="table-responsive">
                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%" id="table">
            <thead>
             <tr>
            <th class="text-center"></th>
            <th class="text-center">Coverimage</th>
            <th class="text-center">Title</th>
            <th class="text-center">Description</th>
            <th class="text-center">Company Name</th>
            <th class="text-center">Section</th>
            <th class="text-center">Link Category</th>
            <th class="text-center">Link</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listadverts as $item)
    <tr class="item{{$item->id}}">
    <td class="text-center">{{$item->id}}</td>
    <td class="text-center"><div class="card-image" style="padding: 2px">
                                            <a href="#pablo">
                                                <img class="img" src="{{$item->coverimage}}" style="height: 15vh; width: 12vw"/>
                                            </a>
                                        </div></td>
    <td class="text-center">{{$item->title}}</td>
    <td class="text-center">{{$item->description}}</td>
    <td class="text-center">{{$item->company}}</td>
    <td class="text-center">{{$item->section}}</td>
    <td class="text-center">{{$item->linkcategory}}</td>
    <td class="text-center">{{$item->link}}</td>
    <td class="text-center"><button class="edit-modal btn btn-info"
            data-info="{{$item->id}},{{$item->title}},{{$item->description}},{{$item->company}},{{$item->section}},{{$item->linkcategory}},{{$item->link}}">
            <span class="material-icons">edit</span>
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="{{$item->id}},{{$item->title}},{{$item->description}},{{$item->company}},{{$item->section}},{{$item->linkcategory}},{{$item->link}}">
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
                            <label class="control-label col-sm-2" for="title">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title">
                            </div>
                        </div>
                        <p class="title_error error text-center alert alert-danger hidden"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description">
                            </div>
                        </div>
                        <p class="description_error error text-center alert alert-danger hidden"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="company">Company</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company">
                            </div>
                        </div>
                        <p class="company_error error text-center alert alert-danger hidden"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="section">Section</label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control" id="section">
                            </div>
                        </div>
                        <p class="section_error error text-center alert alert-danger hidden"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="linkcategory">Link Category</label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control" id="linkcategory">
                            </div>
                        </div>
                        <p class="linkcategory_error error text-center alert alert-danger hidden"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="link">Link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="link">
                            </div>
                        </div>
                        <p class="link_error error text-center alert alert-danger hidden"></p>
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
    $('#title').val(details[1]);
    $('#description').val(details[2]);
    $('#company').val(details[3]);
    $('#section').val(details[4]);
    $('#linkcategory').val(details[5]);
    $('#link').val(details[6]);
  }

});

</script>

<script type="text/javascript">
  $(document).ready(function() {

    $('.modal-footer').on('click', '.edit', function() {
        console.log('response');
        $.ajax({
            type: 'post',
            url: '/editadvert',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'title': $('#title').val(),
                'description': $('#description').val(),
                'company': $('#company').val(),
                'section': $('#section').val(),
                'linkcategory': $('#linkcategory').val(),
                'link': $('#link').val(),
            },
            success: function(data) {
                if (data.errors){
                    $('#myModal').modal('show');
                    if(data.errors.title) {
                        $('.title_error').removeClass('hidden');
                        $('.title_error').text("Title must be a valid one !");
                    }
                }
                 else {
                     
                     $('.error').addClass('hidden');
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td class='text-center'>" +
                        data.id + "</td><td class='text-center'><div class='card-image'><a><img style='height: 15vh; width: 12vw' class='img'src='" + data.coverimage + "'/></a></div></td><td class='text-center'>" + data.title + "</td><td class='text-center'>" +
                         data.description + "</td><td class='text-center'>" + data.company + "</td><td class='text-center'>" + data.section + "</td><td class='text-center'>" + data.linkcategory + "</td><td class='text-center'>" + data.link + "</td><td><button class='edit-modal btn btn-info' data-info='" + data.id+","+data.title+","+data.description+","+data.company+","+data.section+","+data.linkcategory+","+data.link+"'><span class='material-icons'>edit</span></button> <button class='delete-modal btn btn-danger' data-info='" + data.id+","+data.title+","+data.description+","+data.company+","+data.section+","+data.linkcategory+","+data.link+"'><span class='material-icons'>delete</span></button></td></tr>");
                 }}
        });
    });

    $('.modal-footer').on('click', '.delete', function() {
         console.log('response');
        $.ajax({
            type: 'post',
            url: '/deleteadvert',
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
