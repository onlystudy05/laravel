<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participer extends Model
{
    public $timestamps = flase; 
    public $incrementing = false;
    protected $table = 'participer';
    protected $primaryKey = ['codeParticipant', 'codeMessage']; 

    // Relationships
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function message()
    {
        return $this->belongsTo( Message::class);
    }
}

