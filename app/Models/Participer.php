<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Participer extends Model
{
    use HasFactory;

    public $timestamps = false; 
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

