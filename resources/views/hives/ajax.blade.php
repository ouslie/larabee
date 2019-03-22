@extends('layouts.app')
@section('content')
<!-- Modal -->
<div class="modal" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal_content"></div>
    </div>
</div>


<!-- Modal -->
<div class="modal" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete conf</h4>
            </div>
            <div class="modal-body">
            <p>Are you sure want to delete?</p>
                <input type="hidden" id="delete_token" />
                <input type="hidden" id="delete_id" />
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger"
                    onclick="ajaxDelete('{{url('app/hives/delete')}}/'+$('#delete_id').val(),$('#delete_token').val())">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>

<br />

<div id="content">
    @include('hives.index')
</div>
<div class="loading">
    <i class="fa fa-refresh fa-spin fa-2x fa-fw"></i><br />
    <span>Loading</span>
</div>
@endsection
