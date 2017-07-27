<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Add New Contact</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'ContactController@create']) !!}
                {!! Form::hidden('user_id', Auth::id()) !!}
                {!! Form::label('firstname', 'First Name:') !!}
                {!! Form::text('firstname', null, ['class'=>'form-control']) !!}
                {!! Form::label('lastname', 'Last Name:') !!}
                {!! Form::text('lastname', null, ['class'=>'form-control']) !!}
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class'=>'form-control']) !!}
                {!! Form::label('phone_number', 'Phone:') !!}
                {!! Form::text('phone_number', null, ['class'=>'form-control']) !!}
                <div class="modal-footer">
                {!! Form::submit('Create New Contact', ['class'=>'btn btn-primary']) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>