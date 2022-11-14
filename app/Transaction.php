<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function Users(){
        return $this->belongsTo('App\User','user_id');
    }

    public function Buyers(){
        return $this->belongsTo('App\Buyer','buyer_id');
    }
    public function Medicines(){
        return $this->belongsTo('App\Obat','product_transaction',
        'transaction_id','product_id'); 
    }
    public function Product(){
        return $this->belongsToMany('App\Product','product_transaction',
        
        // return $this->belongsTo('App\Category','product_transaction',
        'transaction_id','product_id')->withPivot('quantity','price');
    }

}
