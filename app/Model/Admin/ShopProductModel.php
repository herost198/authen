<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class ShopProductModel extends Model
{
    //
    protected $table = 'shop_products';

    public function category(){

        return  $this->belongsTo('App\Model\Admin\ShopCategoryModel','cat_id','id');


    }
}
