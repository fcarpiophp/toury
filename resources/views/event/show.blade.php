@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Event List for {{ Auth::user()->name }}</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="">
                            <tr>
                                <th>Event Id</th>
                                <th>Event Name</th>
                                <th>Add Participants</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            @foreach($events as $key => $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->eventName}}</td>
                                    <td><i id="{{$value->id}}" class="fa fa-plus-circle" aria-hidden="true"></i></td>
                                    <td><i id="{{$value->id}}" class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                    <td><i id="{{$value->id}}" class="fa fa-trash" aria-hidden="true"></i></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
