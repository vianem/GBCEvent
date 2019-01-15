@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="background-color:royalblue; color:white">
                    <div class="panel-heading"><h2>&nbsp Event Details</h2></div>

                 </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div>

               {{-- <form action="/update/{{$event->id}}" method="post">  --}}
                        <br /><h3>&nbsp&nbsp&nbsp {{$event->eventName}}</h3><br />

                        <label> Location& room </label>&nbsp&nbsp&nbsp
                        <input type="text" name="eventLocation" value="{{$event->eventLocation}}" readonly><br /><br>
                        <label> Dates available </label>&nbsp&nbsp&nbsp&nbsp

                        <input type="text" name="eventDate1" value="{{$event->eventDate1}}" readonly>&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="eventDate2" value="{{$event->eventDate2}}" readonly><br /><br>

                        <label> Event Manager</label>&nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="eventOwner" value="{{$event->eventOwner}}" readonly><br /><br>

                        <label> Event Description</label>
                        <input type="text" name="eventDescription" value="{{$event->eventDescription}}" readonly><br /><br>


                        <a href="/home"><button>Cancel</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <button>Sign Up</button>
                {{--   <input type="submit" name="SignUp" value="Sign Up"> --}}

                    </div>

 </div>
</div>
</div>
</div>   <hr>
</div>



@endsection
