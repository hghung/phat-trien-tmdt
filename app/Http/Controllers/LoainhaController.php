<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\loainha;
use Toastr;


class LoainhaController extends Controller
{
    public function list()
    {
        $loainha = loainha::all();
    	return view('admin.loai-nha.list',['loainha' =>$loainha]);
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
