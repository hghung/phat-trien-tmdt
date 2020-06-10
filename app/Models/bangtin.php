<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Laravelista\Comments\Commentable;

class bangtin extends Model implements Viewable
{
    protected $table='bang_tin';
    use InteractsWithViews, Commentable;


    public function house() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\nha','id_nha','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function user() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\User','id_thanhvien','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function like_bangtin(){
        return $this->hasMany('App\Models\like','id_bangtin','id');
      }

    

}
