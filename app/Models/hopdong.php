<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hopdong extends Model
{
    protected $table='hop_dong_thue';

    public function bangtin2() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\bangtin','id_bangtin','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
    public function thanhtoan() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\payment','id_thanhtoan','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
