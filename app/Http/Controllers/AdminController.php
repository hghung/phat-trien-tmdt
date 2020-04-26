<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\book;
use App\Models\bill;

Use Illuminate\Support\Facades\Auth;

use Toastr;



class AdminController extends Controller
{
    public function home()
    {
        $user = user::all()->count();
        $tongtien = bill::where('id_status','=','7')->sum('bill_total');


        $book = book::where('id_status','=','7')->count();


        $bill = bill::orderBy('id','desc')->get();



        // hiện thi thông báo tên mình
        Toastr::info('Xin chào '.Auth::user()->info->info_lastname.' '.Auth::user()->info->info_name.'', 'Welcome', ["positionClass" => "toast-top-right"]);

    	return view('admin.index',['bill' => $bill, 'user' => $user, 'book' => $book, 'tongtien' => $tongtien]);
    }


}
