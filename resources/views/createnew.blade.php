@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="panel-heading"><h2>&nbsp&nbsp&nbsp&nbsp Create An Event:</h2></div><br/>
                        <form action="/create" method="post">

                            <label> Event Manager</label>&nbsp&nbsp&nbsp
                            <input type="text" name="eventOwner" value="Some Owner"><br /><br>
                            <label> Full Event Title </label>&nbsp&nbsp&nbsp
                            <input type="text" name="eventName" value="Master-Class"><br /><br>
                            <label> Dates & time </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input type="text" name="eventDate1" value="Wed., January 2, 12:00pm">&nbsp&nbsp&nbsp&nbsp
                            <input type="text" name="eventDate2" value="Th., January 3, 2:00pm"><br /><br>
                            <label> Location& room </label>&nbsp&nbsp
                            <input type="text" name="eventLocation" value="GBC Casa-Loma campus, C418"><br /><br>
                            <label> Max. participants </label>
                            <input type="text" name="maxNumParticipants" value="100"><br /><br>
                            <label> Detailed descript.</label>
                            <input type="text" name="eventDescription" value="Unexpectedly sharp and bright seminar"><br /><br>

                            {{csrf_field()}}
                            <a href="/home"><button>Reset</button></a>&nbsp&nbsp&nbsp&nbsp

                            <input type="submit" name="Submit" value="Add record">
                        </form>

                    </div>


@endsection
