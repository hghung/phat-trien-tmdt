<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nha_tienich extends Model
{
    protected $table='nha_tienich';
    public $timestamps = false;

    public function tienich2() // phải viêt liền ko được cách ra hoặc _
    {
        // return $this->hasManyThrough(
        //     'App\Models\nha', 'App\Models\taisan',
        //     'id_nha', 'id_taisan','id'
        // );
        return $this->belongsTo('App\Models\tienich','id_tienich','id'); 

        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
