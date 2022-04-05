<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class City extends Model
{
    use HasFactory;
    protected $fillable=['name','state_id'];

    public function state(){
        return $this->belongsTo(State::class);
    }
}

?>