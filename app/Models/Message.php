<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'Message';
    protected $primaryKey = 'codeMessage'; 
    public function Sujet(){
        return $this->belongsTo(Sujet::class,"codeSujet");
    }
    public function Participant(){
        return $this->belongsToMany(Participant::class , "participer",'codeMessage','codeParticipant');
    }
}
