<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bangtin extends Model
{
    protected $table='bang_tin';

    public function house() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\nha','id_nha','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function user() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\User','id_khachhang','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

}
