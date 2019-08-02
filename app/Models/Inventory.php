<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $fillable = [
        'unit_id',          // 단위
        'stock',            // 재고량
        'input',            // 입고량
        'usage',            // 사용량
        'register_name',    // 등록자
        'comment'           // 비고
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function unit() {
        return \app\Inventory::hasOne(App\Unit::class, 'id', 'unit_id');
    }
}
