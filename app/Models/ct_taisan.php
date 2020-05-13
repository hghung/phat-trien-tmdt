<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ct_taisan extends Model
{
    protected $table='chi_tiet_tai_san';
    public $timestamps = false;

    public function taisan2() // phải viêt liền ko được cách ra hoặc _
    {
        // return $this->hasManyThrough(
        //     'App\Models\nha', 'App\Models\taisan',
        //     'id_nha', 'id_taisan','id'
        // );
        return $this->belongsTo('App\Models\taisan','id_taisan','id'); 

        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
