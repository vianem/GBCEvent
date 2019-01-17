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

                        <!-- <form action="/update/" method="post"> -->

                   <!--  Subscription for current event is sent from here:-->

                   <!--  <form method="post" action="/subscribe/{{$event->id}}" >-->

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

                        <label> # Participants</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                        <!-- Taking count of users, registered for an event here: -->
                        <input type="text" name="eventDescription" value="{{$event->users()->count()}}" readonly><br /><br>

                        {{csrf_field()}}
                        <a href="/home"><button>Cancel</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <!-- <a href="/subscribe/{{$event->id}}"><button>Sign Up</button></a>-->
                        <!-- <input type="submit" name="Submit" value="Sign Up">-->
                      </form>
                     </div>

                  </div>
              </div>
          </div>
      </div>   <hr>




@endsection
