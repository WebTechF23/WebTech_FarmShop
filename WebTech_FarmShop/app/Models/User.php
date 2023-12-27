<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $fillable = ['name', 'email', 'phoneNumber', 'password', 'isAdmin', 'created_at', 'updated_at'];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function isAdmin(){
        if ($this->isAdmin == 1){
            return true;
        }else return false;

    }

}

