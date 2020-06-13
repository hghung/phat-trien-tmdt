<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\bangtin;
use App\Models\hopdong;


Use Illuminate\Support\Facades\Auth;

use Toastr;

use Artisan;

class AdminController extends Controller
{
    public function home()
    {
        
        $thanhvien = User::where('status','=','1')->count();
        $price = hopdong::where('trang_thai','=','1')->sum('tien');
        $bangtin = bangtin::where('trang_thai','=','1')->count();
        $hopdong = hopdong::where('trang_thai','=','1')->count();


        return view('admin.index',['thanhvien' => $thanhvien, 'bangtin' => $bangtin , 'price' => $price, 'hopdong' => $hopdong]);

        
        
    }

    


    public function master()
    {
        
        
    	return view('admin.master');
    }

    


}
