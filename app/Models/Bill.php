<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='bill';

    public function status() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\status','id_status','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function detailbill() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\detail_bill','id_bill','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function userbill() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\User','id_account','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }


}
