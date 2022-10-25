<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
   
    protected $fillable = ['name','phone_number', 'email', 'address',];
    use HasFactory;
    public function books(){
        return $this->hasMany('App\Models\Book', 'catalog_id');
    }
}
