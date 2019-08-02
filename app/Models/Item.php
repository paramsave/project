<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'Item';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cate_id',          // 카테고리 아이디
        'item_name',        // 이름
        'item_feature',     // 특징
        'provider_name',    // 공급자
        'standard',         // 규격 물품에 대한 간략 설명
    ];

    public function category()
    {
        return \app\Item::hasOne(App\Category::class, 'id', 'cate_id');
    }
}
