<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventComment extends Model
{    
    /**
     * table
     *
     * @var string
     */
    protected $table = 'event_comments'; 
        
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'comment',
        'time',
        'eventid',
        'userid',
    ];
    
    /**
     * user
     *
     * @return void
     */
    public function event()
    {
        return $this->belongsTo('Event', 'eventid', 'id');
    }
    
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('User', 'userid', 'id');
    }
}
