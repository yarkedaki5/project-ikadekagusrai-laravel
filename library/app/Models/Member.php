<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name','email','gender','phone_number','address'];
    use HasFactory;
    public function user(){
        return $this->hasOne('App\Models\user', 'member_id');
    }
    public function transaction(){
        return $this->hasMany('App\Models\Transaction', 'member_id');
    }
}
