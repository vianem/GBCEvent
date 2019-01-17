@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card-header h2 ">Create An Event:</div>
                        <div class="card-body">
                            <form action="/create" method="post">
                                    <label> Event Manager</label>
                                    <input type="text" class="form-control"  name="eventOwner" placeholder="Event Owner">
                                    <label> Full Event Title </label>
                                    <input type="text" class="form-control" name="eventName" placeholder="e.g. Master-Class">
                                    <label> Dates & Times </label>
                                    <input type="date" class="form-control" name="eventDate1">
                                    <input type="date" class="form-control" name="eventDate2">
                                    <label> Location & Room </label>
                                    <input type="text" class="form-control" name="eventLocation" placeholder="e.g. Casa-Loma campus, C418">
                                    <label> Max. Participants </label>
                                    <input type="text" class="form-control" name="maxNumParticipants" placeholder="e.g. 100">
                                    <label> Detailed Description</label>
                                    <input type="text" class="form-control" name="eventDescription" placeholder="e.g. Unexpectedly sharp and bright seminar">

                                    {{csrf_field()}}
                                    <a href="/home"><button class="btn btn-success">Reset</button></a>&nbsp&nbsp&nbsp&nbsp
                                    <input type="submit" class="btn btn-success" name="Submit" value="Add record">
                            </form>
                        </div>
                    </div>
@endsection
