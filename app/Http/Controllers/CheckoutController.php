<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
Use Illuminate\Support\Facades\Auth;
use App\Models\bangtin;
use App\Models\Province;

use Toastr;


class CheckoutController extends Controller
{   
    public function checkout_1()
    {
        $data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
        $data['cart'] = Cart::content();
        return view('house.checkout.checkout-1',$data);
    }
       
    public function addCart($id)
    {
    	// dd($id);
    	$bangtin = bangtin::find($id);
        if(Auth::user()->id == $bangtin->id_thanhvien)
        {
            
            Toastr::warning('Sản phẩm của bạn không được đưa vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else
        {
            Cart::add(['id' => $id,  
                'name' => $bangtin->ten_bangtin,
                'qty' => 1,
                'price' => $bangtin->gia_thue,
                'weight' => 1,
                'options' => ['img' => $bangtin->house->hinh_anh]]);

            Toastr::info('Đã thêm 1 sản phẩm vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->route('checkout-1');
        }
    	
    	// $data = Cart::content();
    	// dd($data);
       }
       
       public function delCart($id)
    {
    	if($id == 'all')
    	{
    		Cart::destroy($id);
            Toastr::warning('Bạn đã xóa hết sản phẩm', 'Thông báo', ["positionClass" => "toast-top-right"]);

    	}
    	else
    	{
    		Cart::remove($id);
            Toastr::warning('Bạn đã xóa 1 sản phẩm', 'Thông báo', ["positionClass" => "toast-top-right"]);

    	}
    	return back();
   	}
}
