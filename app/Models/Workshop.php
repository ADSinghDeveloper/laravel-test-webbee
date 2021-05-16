<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    /**
     * Get the Event record associated with the Workshop.
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

}
