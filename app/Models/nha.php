<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nha extends Model
{
    protected $table='nha';
    public $timestamps = false;

    public function hinhanh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\hinhanh','id_nha','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function taisan() // phải viêt liền ko được cách ra hoặc _
    {
        // return $this->hasManyThrough(
        //     'App\Models\nha', 'App\Models\taisan',
        //     'id_nha', 'id_taisan','id'
        // );
        return $this->belongsToMany('App\Models\ct_taisan','id_nha','id'); 

        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
