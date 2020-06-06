<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bangtin;

class TimkiemController extends Controller
{
    public function post_search(Request $rq)
    {
        
        $tukhoa = $rq->tukhoa;

        $bangtin = bangtin::where('ten_sp','like',"%$tukhoa%")->orwhere('ma_sanpham','like',"%$tukhoa%")->get();

        $bangtin2 = bangtin::where('ten_sp','like',"%$tukhoa%")->orwhere('ma_sanpham','like',"%$tukhoa%")->count();

        $collection = collect([$bangtin2]);
        $banhbao = $collection->sum();

        return view('house.tim-kiem.tim-kiem',['bangtin'=>$bangtin,'banhbao'=>$banhbao,'tukhoa'=>$tukhoa]);

    }
}
