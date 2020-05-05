<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taisan;
use Toastr;


class TaisanController extends Controller
{
    public function list()
    {
        $taisan = taisan::all();
    	return view('admin.tai-san.list',['taisan' =>$taisan]);
    }

    public function post_add(Request $taisan2)
    {
            // info
            $taisan = new taisan;
            $taisan->ten_ts = $taisan2->name;
            
            // echo $user; die;   
            $taisan->save();

        Toastr::success('Them thanh cong', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
