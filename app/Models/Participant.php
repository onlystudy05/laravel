<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Participant extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'Participant';
    protected $primaryKey = 'codeParticipant';  
    public function Sujet(){
        return $this->hasMany(Sujet::class, 'ProposerPar', 'codeParticipant');
    }
    public function Message(){
        return $this->belongsToMany(Message::class , "participer",'codeParticipant','codeMessage');
    }
}



