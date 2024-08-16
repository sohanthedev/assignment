@extends('contact.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Show Contact
                        <a href="{{ url('contact') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label>Name</label>
                        <p>{{$contact->name}}</p>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <p>{{$contact->email}}</p>
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        {{$contact->phone}}
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        {{$contact->address}}
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection