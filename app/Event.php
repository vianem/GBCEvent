<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['eventName', 'eventOwner', 'eventDescription','eventLocation', 'eventDate1', 'eventDate2','maxNumParticipants'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'event_user');
    }
}
