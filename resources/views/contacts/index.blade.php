@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h2 class="text-center">Your Contacts</h2>
                    <section class="contacts">
                        @include('contacts.load')
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection