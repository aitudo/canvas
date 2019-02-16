@extends('canvas::index')

@section('actions')
    <a href="#" class="btn btn-sm btn-outline-primary my-auto mx-3"
       onclick="event.preventDefault();document.getElementById('form-create').submit();"
       aria-label="Save">Save</a>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('canvas::components.forms.topic.create')
            </div>
        </div>
    </div>
@endsection