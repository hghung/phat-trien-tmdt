<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bangtin;
use App\Models\nha;
use App\Models\loainha;
use App\Models\taisan;
use App\Models\hinhanh;
use App\Models\ct_taisan;


Use Illuminate\Support\Facades\Auth;


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
        $loainha = loainha::all();
        $taisan = taisan::all();

    	return view('admin.bang-tin.add',['loainha' => $loainha, 'taisan' =>$taisan]);
    }



    public function post_add(Request $bangtin2)
    {
            // Nha
            $nha = new nha;
            // dd($nha);
            $nha->tinh_trang = $bangtin2->status;
            $nha->id_loainha = $bangtin2->idloainha;
            $nha->dien_tich = $bangtin2->dientich;
            $nha->rooms = $bangtin2->sophong;



            $nha->dia_chi = $bangtin2->diachi;
            $nha->province = $bangtin2->tinhthanh;
            $nha->lat = $bangtin2->lat;
            $nha->lng = $bangtin2->lng;




            if($bangtin2->hasFile('hinhanh'))
            {
                $file = $bangtin2->file('hinhanh');
                // echo $file;die;
                // kiểm tra  size
                $size = $file->getsize();
                if($size > 1024*1024)
                {
                    // echo "size quá lớn chọn lại";
                    return redirect()->back()->with('size','size quá lớn chọn lại');
                }
                // echo "banhbao";die;

                //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
                $duoi_file = $file->getClientOriginalExtension();
                //tạo 1 mang arr để sử dụng in_array so sanh
                $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];

                if(!in_array($duoi_file, $arr_duoifile))
                {
                    // echo "Đuôi file size xin mời định dạng lại";
                    return redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
                }
                // echo "banhbao";die;

                // radom tên hinh ảnh, để lấy ra không bị trùng
                //,... getClientOriginalName() lấy ra tên
                $name = $file->getClientOriginalName();
                $hinh_anh = str_random(5)."_".$name;

                // echo $hinh_anh;die;
                while(file_exists('public/upload/'.$hinh_anh))
                {
                    $hinh_anh = str_random(4)."_".$name;
                }
                // echo $name; die; 
                $file->move('public/upload/',$hinh_anh);
                $nha->hinh_anh = $hinh_anh;
            
            }
            else
            {
                $nha->hinh_anh = "";
            }

            $nha->save();

            // dd($nha);

            $nha->ma_nha = "HOUSE-000".$nha->id;
            $nha->save();
            
            // ////// Dang tin ////////
            $bangtin = new bangtin;
            $bangtin->ten_bangtin = $bangtin2->tieude;
            $bangtin->mo_ta = $bangtin2->mota;
            $bangtin->gia_thue = $bangtin2->price;
            $bangtin->trang_thai = "1";


            $bangtin->id_nha = $nha->id ;
            $bangtin->id_khachhang = Auth::user()->id ;
            // echo $bangtin;die;
            // echo $user; die;   
            $bangtin->save();

            $bangtin->code_bangtin = "POST-000".$bangtin->id;
            $bangtin->save();


            // upload nhieu anh

            if($bangtin2->hasFile('hinhanh2'))
            {
                // $banhbao22 = $bangtin2->hasFile('hinhanh2');
                // echo $banhbao22;die;
                foreach ($bangtin2->file('hinhanh2') as $file2)
                {
                    $dshinhanh = new hinhanh;

                    if(isset($file2))
                    {
                        $dshinhanh->id_nha = $nha->id;

                        // echo $file2;die;
                        // kiểm tra  size
                        $size = $file2->getsize();
                        if($size > 1024*1024)
                        {
                            // echo "size quá lớn chọn lại";
                            return redirect()->back()->with('size','size quá lớn chọn lại');
                        }
                        // echo "banhbao";die;

                        //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
                        $duoi_file = $file2->getClientOriginalExtension();
                        //tạo 1 mang arr để sử dụng in_array so sanh
                        $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];
                        if(!in_array($duoi_file, $arr_duoifile))
                        {
                            // echo "Đuôi file size xin mời định dạng lại";
                            return redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
                        }
                        // echo "banhbao";die;
                        // radom tên hinh ảnh, để lấy ra không bị trùng
                        //,... getClientOriginalName() lấy ra tên
                        $name = $file2->getClientOriginalName();
                        $hinh_anh = str_random(5)."_".$name;

                        // echo $hinh_anh;die;
                        while(file_exists('public/upload/'.$hinh_anh))
                        {
                            $hinh_anh = str_random(4)."_".$name;
                        }
                        // echo $name; die; 
                        $file2->move('public/upload/',$hinh_anh);
                        $dshinhanh->hinh_anh = $hinh_anh;

                        // echo "banhbao2";die;

                        $dshinhanh->save();
                    }
                    
                }
            }
            else
            {
                echo "banhbao";die;
                $dshinhanh->hinh_anh = "";
            }

            // tai san so luong ///////////////////////////////////////////////////////////////////
            $data = array();
            foreach($bangtin2->taisan as $key => $value) {
                $data [] =  [
                    'idtaisan' => $bangtin2->taisan[$key],
                    'idnha' => $nha->id,
                    'soluong' => $bangtin2->soluong[$key],
                ];
            }
            // dd($data);
            foreach($data as $key => $value)
            {
                $data2 = new ct_taisan;
                $data2->id_nha = $value['idnha'];
                $data2->id_taisan = $value['idtaisan'];
                $data2->so_luong = $value['soluong'];
                $data2->save();
            }

        Toastr::success('Them thanh cong', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect(''.route('bangtin.list').'');
    }
}
