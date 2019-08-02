<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cate_id',          // 카테고리 아이디
        'item_name',        // 이름
        'provider_name',    // 공급자
    ];

    public function category()
    {
        return \app\Models\Item::hasOne(App\Models\Category::class, 'id', 'cate_id');
    }

    public function inventory()
    {
        return \App\Models\Item::hasMany(\App\Models\Inventory::class);
    }
}
