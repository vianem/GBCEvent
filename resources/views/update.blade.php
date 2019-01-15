@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><h2>Modify Event:</h2></div>

                    <form action="/update/{{$event->id}}" method="post">
                        <label> Event Manager</label>&nbsp&nbsp&nbsp
                        <input type="text" name="eventOwner" value="{{$event->eventOwner}}"><br /><br>
                        <label> Full Event Title </label>&nbsp&nbsp&nbsp
                        <input type="text" name="eventName" value="{{$event->eventName}}"><br /><br>
                        <label> Dates & time </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="eventDate1" value="{{$event->eventDate1}}">&nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="eventDate2" value="{{$event->eventDate2}}"><br /><br>
                        <label> Location& room </label>&nbsp&nbsp
                        <input type="text" name="eventLocation" value="{{$event->eventLocation}}"><br /><br>
                        <label> Max. participants </label>
                        <input type="text" name="maxNumParticipants" value="{{$event->maxNumParticipants}}"><br /><br>
                        <label> Detailed descript.</label>
                        <input type="text" name="eventDescription" value="{{$event->eventDescription}}"><br /><br>

                        {{csrf_field()}}
                        <a href="/home"><button>Cancel</button></a>&nbsp&nbsp&nbsp&nbsp
                        <input type="submit" name="Submit" value="Save">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

