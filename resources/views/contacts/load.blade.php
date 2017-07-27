<div class="panel-body" id="load">
    <button class="btn btn-success addContact" data-toggle="modal" data-target="#addModal">
        <span class="glyphicon glyphicon-plus"></span>
        Add Contact
    </button>
    @include('modals.addModal')
    @foreach($contacts as $contact)
        <div class="contact">
            <h3 class="contactName">{{$contact->firstname}} {{$contact->lastname}}</h3>
            <div class="image">
                @if($contact->image)
                    <img class="contactImage" src="/image/{{$contact->image}}" alt="">
                @else
                    <img class="contactImage" src="/images/default.png" alt="">
                @endif
                <button class="changePhoto">Change Photo</button>
                {!! Form::open(['method'=>'PATCH', 'route'=> ['contact.photo', $contact->id], 'class'=>'photoForm','files'=>true]) !!}
                {!! Form::file('image', array('class'=>'addPhoto', 'onChange'=>'form.submit()')) !!}
                {!! Form::close() !!}
            </div>
            <button class="btn btn-default editContact" data-toggle="modal" data-target="#editModal"
                    data-id="{{$contact->id}}"
                    data-firstname="{{$contact->firstname}}"
                    data-lastname="{{$contact->lastname}}"
                    data-email="{{$contact->email}}"
                    data-address="{{$contact->address}}"
                    data-phone_number="{{$contact->phone_number}}">Edit Contact</button>
            <div class="contactEmail">
                <strong>Email:</strong>
                <p>{{$contact->email}}</p>
            </div>
            <div class="contactAddress">
                <strong>Address:</strong>
                <p>{{$contact->address}}</p>
            </div>
            <div class="contactPhone">
                <strong>Phone:</strong>
                <p>{{$contact->phone_number}}</p>
            </div>
            <a href="{{ route('contact.delete', $contact->id) }}" class="btn btn-danger deleteContact">Delete</a>
        </div>
        @include('modals.editModal')
    @endforeach
</div>
<div class="text-center"> {{$contacts->links()}}</div>