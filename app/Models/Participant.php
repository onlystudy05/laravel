<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Participant extends Model
{
    use HasFactory;
    protected $timestamps=false;
    protected $table = 'Participant'; 
    public function Sujet(){
        return $this->hasMany(Sujet::class);
    }
    public function Message(){
        return $this->belongsToMany(Message::class);
    }
}
