<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

Use Illuminate\Support\Facades\Auth;

use Toastr;



class AdminController extends Controller
{
    public function home()
    {
        $thanhvien = User::where('trang_thai','=','2')->get()
        return view('admin.index');

        
        
    }


    public function master()
    {
        
        
    	return view('admin.master');
    }

    


}
