<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;
    protected $timestamps=false;
    protected $table = 'Sujet'; 

    public function Participant(){
        return $this->belongsTo(Participant::class);
    }
    public function Message(){
        return $this->hasMany(Message::class);
    }
    
}
