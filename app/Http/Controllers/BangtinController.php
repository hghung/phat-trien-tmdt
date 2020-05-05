<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bangtin;
use App\Models\nha;
use App\Models\tai_san;
use App\Models\hinhanh;

use Toastr;

class BangtinController extends Controller
{
    public function list()
    {
        $bangtin = bangtin::all();
    	return view('admin.bang-tin.list',['bangtin' =>$bangtin]);
    }


    public function add()
    {
    	return view('admin.bang-tin.add');
    }



    public function post_add(Request $loainha2)
    {
            // info
            $loainha = new loainha;
            $loainha->ten_loai = $loainha2->name;
            
            // echo $user; die;   
            $loainha->save();

        Toastr::success('Them thanh cong', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
