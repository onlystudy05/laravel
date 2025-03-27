<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $timestamps=false;
    protected $table = 'Message';
    public function Sujet(){
        return $this->belongsTo(Sujet::class);
    }
    public function Participant(){
        return $this->belongsToMany(Participant::class);
    }
}
