<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $primaryKey = 'id';
    protected $fillable = [
        'item_id',          // 물품번호
        'unit_id',          // 단위
        'standard',         // 규격(정밀도, 재현도, 분해능 등등)
        'stock',            // 재고량
        'input',            // 입고량
        'usage',            // 사용량
        'user_id',          // 등록자
        'comment'           // 비고
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function item() {
        return \app\Models\Inventory::hasOne(app\Models\Item::class, 'id', 'item_id');
    }

    public function unit() {
        return \app\Models\Inventory::hasOne(App\Models\Unit::class, 'id', 'unit_id');
    }

    public function user() {
        return \app\Models\Inventory::hasOne(App\Models\User::class, 'id', 'user_id');
    }
}
