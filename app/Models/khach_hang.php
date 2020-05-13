<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    protected $table='khach_hang';

    public function member2() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasOne('App\User','id_user','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function province() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\province','kh_province','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function district() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\district','kh_district','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function ward() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\ward','kh_ward','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

}
