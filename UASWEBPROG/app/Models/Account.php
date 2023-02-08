<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function Role(){
        return $this->hasOne(Role::class);
    }
    public function Gender(){
        return $this->hasOne(Gender::class);
    }
    public function Order(){
        return $this->hasMany(Order::class);
    }

}
