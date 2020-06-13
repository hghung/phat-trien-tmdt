<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\SoftDeletes;


class bangtin extends Model implements Viewable
{
    protected $table='bang_tin';
    // SoftDeletes khoi phuc tep tin da xoa
    // InteractsWithViews luot view
    // Commentable danh gia
    use InteractsWithViews, Commentable, SoftDeletes;

    protected $dates = ['deleted_at'];

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
