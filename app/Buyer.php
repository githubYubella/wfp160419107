<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    //
    public function Transaction(){
        return $this->belongsTo('App\Transaction','buyer_id','id'); 
    }

}
