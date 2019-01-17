@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel-heading"><h2>Upcoming events:</h2></div>
                    <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                          @foreach($events as $event)
                            <table class = "table table-hover">
                                <thead>
                                <tr>
                                    <th>{{$event->eventDate1}}</th>
                                    <th><a href="/viewrec/{{$event->id}}">{{$event->eventOwner}}</a></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <td></td>
                                        <td>{{$event->eventName}}</td>
                                        <td>

                                        </td>
                                    </tr>
                            </table>
                              <br>
                          @endforeach
                                <div class="col-md-6 offset-4"> {{ $events->links() }} </div>
                    </div>
               </div>
            <div class="">
                <a href="/callcreate" ><button class="btn btn-success">Create New Event</button></a>
            </div>
        </div>
        </div>
    </div>

@endsection
