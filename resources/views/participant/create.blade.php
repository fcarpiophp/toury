@extends('layouts.app')
<style type="text/css">
    .alert-danger {
        display: none;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Event Participants</div>
                    <div class="card-body">
                        {{ Form::open(array('url'=>'/participant/store', 'method'=>'POST', 'accept-charset'=>'UTF-8')) }}
                        {{ Form::hidden('eventId', $eventId) }}
                        @for ($i = 0; $i < $participants; $i++)
                            <div class="input-group">
                                <input name="participantName[]" type="text" class="form-control" placeholder="Participant Name">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Vs.</span>
                                </div>
                                <input name="participantName[]" type="text" class="form-control" placeholder="Participant Name">
                            </div>
                            <br>
                        @endfor
                        <div class="additionalFieldsContainer"></div>
                        {{ Form::button('Add More Participants', array('class'=> 'btn btn-secondary small pull-left addMoreParticipants')) }}
                        {{ Form::submit('Submit', array('class'=> 'btn btn-primary small pull-right')) }}
                        {{ Form::close() }}
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-1">
                                <div class="alert alert-danger text-center" role="alert"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script type="application/javascript">
    window.addEventListener('load', function() {
        $(document).ready(function() {
            $('.addMoreParticipants').click(function() {
                if ($('.input-group').length < 8) {
                    var html = '<div class="input-group">' + $('div.input-group').html() + '</div><br>';
                    $('div.additionalFieldsContainer').append(html);
                } else {
                    $('.alert-danger').text('Alert! You have reached the maximum number of participants.').show();
                }
            });
        });
    })
</script>
