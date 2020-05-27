<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Models\bangtin;

use App\Models\taisan;
use App\Models\nha;

use App\Models\ct_taisan;

use DB;

use Carbon\Carbon;
Use Illuminate\Support\Facades\Auth;

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
    	return view('house.index');
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
        
        $province = Province::all();
        $district = District::all();
        $ward = Ward::all();
    	return view('house.reg',['province' => $province, 'district' => $district, 'ward' => $ward]);
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
        $taisan = taisan::all();

        $taisan = $taisan->toArray();

        $ct_taisan = ct_taisan::where('id_nha', '=', $bangtin->id_nha )->get();

        foreach($taisan as $key => $value)
        {
            $taisan[$key] = [
                'ten_ts' => $value,
                'so_luong' => 0
            ];
        }

        // foreach($taisan as $key => $value)
        // {
            
        //     foreach($ct_taisan as $ts2)
        //     {
        //         if($value['id'] == $ts2->id_taisan)
        //         {
        //             $taisan[$key] = [
        //                 'so_luong' => $ts2->so_luong,
        //             ];
        //         }
                
        //     }
        // }
        
        dd($taisan);
    	return view('house.single',['bangtin' => $bangtin, 'taisan' => $taisan, 'ct_taisan' => $ct_taisan]);
    }

    

   
}
