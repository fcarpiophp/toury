@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Event</div>
                    <div class="card-body">
                        {{ Form::open(array('url'=>'/event/store', 'method'=>'POST', 'accept-charset'=>'UTF-8')) }}
                        {{ Form::hidden('userId',\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()) }}
                        <div class="input-group mb-3">
                            <input name="eventName" type="text" class="form-control" placeholder="Event Name"
                                   aria-label="Event Name" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                {{ Form::submit('Create Event', array('class'=> 'btn btn-primary small')) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
