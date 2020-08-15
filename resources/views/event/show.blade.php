@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Event List for {{ Auth::user()->name }}</div>
                    <div class="card-body">
                        @if(!$events->isEmpty())
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th>Event Id</th>
                                        <th>Event Name</th>
                                        <th>Add/Edit Participants</th>
                                        <th>Set Winners</th>
                                        <th>Edit Event</th>
                                        <th>Delete Event</th>
                                    </tr>
                                </thead>
                            @foreach($events as $key => $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td><a href="/participant/show/{{$value->id}}">{{$value->eventName}}</a></td>
                                        <td><i id="{{$value->id}}" class="fa fa-plus-circle" aria-hidden="true"></i></td>
                                        <td>
                                            <a href="/participant/showStanding/{{$value->id}}">
                                                <i id="{{$value->id}}" class="fa fa-trophy" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td><i id="{{$value->id}}" class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                        <td><i id="{{$value->id}}" class="fa fa-trash" aria-hidden="true"></i></td>
                                    </tr>
                            @endforeach
                            </table>
                        @else
                            <?php
                                $createEventLink = '<a href="/event/create">here</a>';
                                echo 'No events to show, please click '. $createEventLink .' to add an event.';
                            ?>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
