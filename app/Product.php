<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function Category(){
        return $this->belongsTo('App\Category','category_id');
    }
    public function Transaction(){
        return $this->belongsToMany('App\Transaction','product_transaction',
        
        // return $this->belongsTo('App\Category','product_transaction',
        'product_id','transaction_id')->withPivot('quantity','price');
    }
    // public function Transaction(){
    //     return $this->belongsTo('App\Category','product_transaction',
    //     'product_id','transaction_id')->withPivot('quantity','price');
    // }
}
