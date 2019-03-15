<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuItemModel extends Model
{
    //
    protected $table = 'menu_items';

    public static function getTypeOfMenuItem(){
        $types = array();
        $types[1] = 'Shop Category';
        $types[2] = 'Shop product';
        $types[3] = 'Content Category';
        $types[4] = 'Content page';
        $types[5] = 'Content tag';
        $types[6] = 'Content post';
        $types[7] = 'Custom link';

        return $types;
    }
}
