<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Models\bangtin;

use App\Models\taisan;
use App\Models\nha;
use App\Models\loainha;


use App\Models\nha_tienich;


use App\Models\ct_taisan;

use DB;

use Carbon\Carbon;
Use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Arr;


class PageController extends Controller
{

    // start test
    public function googlemap()
    {
        
        
    	return view('googlemap.index');
    }

    public function gg1()
    {
    	return view('googlemap.gg1');
    }
    // end test

    public function home()
    {
        

        $bangtin = bangtin::where('trang_thai','=',1)->get();
    	return view('house.index',['bangtin' => $bangtin]);
    }

    public function login()
    {
        if(!Auth::check())
        {
            return view('house.login');
        }
        else
        {
            return redirect()->route('taikhoan.profile');
            /// rediect thay vì route để kiêm tra user đã đăng nhập chưa vào act.home đã có sẳn rùi nên mới route dc
        }
    }   

    public function dangky()
    {
        
    	return view('house.reg');
    }

    public function ajax_district($id_province)
    {
        $quanhuyen = District::where('province_id',$id_province)->get();
        foreach($quanhuyen as $dt)
        {
             echo "<option value='".$dt->id."'>".$dt->district_name."</option>"; 
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }

    public function ajax_ward($id_ward)
    {
        $phuongxa = Ward::where('district_id',$id_ward)->get();
        foreach($phuongxa as $wd)
        {
             echo "<option value='".$wd->id."'>".$wd->ward_name."</option>"; 
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }
    


    public function list()
    {
        $bangtin = bangtin::where('trang_thai','=','1')->orderBy('id','desc')->paginate(6);


        // $bangtin2 = bangtin::all();
        Carbon::setLocale('vi'); // sư dụng đây nên giờ nó hiêu là tiên việt
        // ->diffForHumans() để so sánh giờ
    	return view('house.list',['bangtin' => $bangtin]);
    }


    public function single($id)
    {
        
        $bangtin = bangtin::find($id);
        $nha = nha::all();

        $tienich = nha_tienich::where('id_nha', '=', $bangtin->id_nha )->get();


        $taisan = taisan::all();

        $taisan = $taisan->toArray();

        $ct_taisan = ct_taisan::where('id_nha', '=', $bangtin->id_nha )->get();

        foreach($taisan as $key => $value)
        {
            $taisan[$key] = [
                'ten_ts' => $value['ten_ts'],
                'so_luong' => 'Không có',
                'id' => $value['id']
            ];
            // $taisan = Arr::add(['name' => 'Desk'], 'price', 100);
        }
        // dd($taisan);
        
        
        foreach($taisan as $key => $value)
        {
            foreach($ct_taisan as $ts2)
            {
                if($value['id'] == $ts2->id_taisan)
                {
                    $taisan[$key] = [
                        'ten_ts' => $value['ten_ts'],
                        'so_luong' => $ts2->so_luong,
                        'id' => $value['id']
                    ];
                }
                
            }
        }

        

        
    	return view('house.single',['bangtin' => $bangtin, 'taisan' => $taisan, 'taisan' => $taisan, 'tienich' => $tienich]);
    }

    

   
}
