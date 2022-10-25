<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public function member(){
        return $this->belongsTo('App\Models\Member', 'member_id');
    }
    public function book()
    {
        return $this->belongsToMany('App\Models\Book', 'transaction_details', 'transaction_id', 'book_id');
    }
    public function transaction_detail()
    {
        return $this->hasOne('App\Models','transaction_id');
    }
}
