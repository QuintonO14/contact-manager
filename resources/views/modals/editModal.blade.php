<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center"> Edit Existing Contact </h4>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-body">
                    {{ Form::model($contact, ['method' => 'PATCH', 'route' => ['contact.update', $contact->id], 'id' => 'form']) }}
                    {!! Form::label('firstname', 'First Name:') !!}
                    {!! Form::text('firstname', null, ['class'=>'form-control','id'=>'firstname']) !!}
                    {!! Form::label('lastname', 'Last Name:') !!}
                    {!! Form::text('lastname', null, ['class'=>'form-control','id'=>'lastname']) !!}
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', null, ['class'=>'form-control','id'=>'email']) !!}
                    {!! Form::label('address', 'Address:') !!}
                    {!! Form::text('address', null, ['class'=>'form-control','id'=>'address']) !!}
                    {!! Form::label('phone_number', 'Phone:') !!}
                    {!! Form::text('phone_number', null, ['class'=>'form-control','id'=>'phone_number']) !!}
                    <div class="modal-footer">
                    {!! Form::submit('Update Contact', ['class'=>'btn btn-primary']) !!}
                    {!! Form::button('Close', ['class'=>'btn btn-default', 'data-dismiss'=>'modal']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>
