<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Models\bangtin;

use Carbon\Carbon;


class PageController extends Controller
{


    public function home()
    {
        
        
    	return view('house.index');
    }

    public function login()
    {
        
        
    	return view('house.login');
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
    	return view('house.single',['bangtin' => $bangtin]);
    }

    

   
}
