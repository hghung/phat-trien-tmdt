<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
Use Illuminate\Support\Facades\Auth;
use App\Models\bangtin;
use App\Models\Province;

use Toastr;

use Carbon\Carbon;



class CheckoutController extends Controller
{   
    public function checkout_1()
    {
        $data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
        $data['cart'] = Cart::content();
        // dd($data['cart']);
        $now['now2'] = Carbon::now(); // cách viet mơi sang view

        if($data['cart']->count() > 0 )
        {
            
            return view('house.checkout.checkout-1',$data,$now);
    
        }
        else
        {
            return redirect()->route('page.home');
        }
    }

    public function checkout_2()
    {
        $data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
        $data['cart'] = Cart::content();
        $now['now2'] = Carbon::now(); // cách viet mơi sang view

        if($data['cart']->count() > 0 )
        {
            
            return view('house.checkout.checkout-2',$data,$now);
    
        }
        else
        {
            return redirect()->route('page.home');
        }
    }

    public function checkout_3()
    {
        $data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
        $data['cart'] = Cart::content();
        $now['now2'] = Carbon::now(); // cách viet mơi sang view

        if($data['cart']->count() > 0 )
        {
            
            return view('house.checkout.checkout-3',$data,$now);
    
        }
        else
        {
            return redirect()->route('page.home');
        }
    }

       
    public function addCart($id, Request $rq)
    {   
        
        
            

        $bangtin = bangtin::find($id);

        $banhbao = $rq->ngayden;
        $banhbao = $rq->thoigiano;

        // var_dump( $banhbao);die;

        //kiêm tra coi user đăng bài thi ko cho thêm sản phâm minh vào giỏ hàng
        if(Auth::user()->id == $bangtin->id_thanhvien)
        {
            Toastr::warning('Sản phẩm của bạn không được đưa vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else
        {
            $checkout = Cart::content();
            foreach($checkout as $cart)
            {
                $id2 = $cart->id;
                $soluong = $cart->qty;
            }
            $cart2 =  $checkout->count();
            // dd($id2);
            // chỉ cho thêm 1 nhà vào giỏ hàng vì nó là nhà ko thể thêm nhiêu nhà như sản phẩm   
            if($cart2 == 0 )
            {
                Cart::add(['id' => $id,  
                'name' => $bangtin->ten_bangtin,
                'qty' => 1,
                'price' => $bangtin->gia_thue,
                'weight' => 1,
                'options' => ['img' => $bangtin->house->hinh_anh,
                            'code' => $bangtin->code_bangtin,
                            'ngayden' => $rq->ngayden,
                            'thoigiano' => $rq->thoigiano,
                            'address' => $bangtin->house->dia_chi,
                            'discount' => $rq->thoigiano * $bangtin->gia_thue * 5 / 100,
                            'tongtien' =>  $rq->thoigiano * $bangtin->gia_thue - $rq->thoigiano * $bangtin->gia_thue * 5 / 100

                            ]
                ]);

                Toastr::info('Đã thêm 1 sản phẩm vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
                return redirect()->route('checkout-1');

            }   
            else
            {
                if($bangtin->id == $cart->id )
                {
                    Toastr::warning('Sản phẩm đã có trong giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                }
                else
                {
                    Cart::add(['id' => $id,  
                    'name' => $bangtin->ten_bangtin,
                    'qty' => 1,
                    'price' => $bangtin->gia_thue,
                    'weight' => 1,
                    'options' => ['img' => $bangtin->house->hinh_anh,
                                'code' => $bangtin->code_bangtin,
                                'ngayden' => $rq->ngayden,
                                'thoigiano' => $rq->thoigiano,
                                'address' => $bangtin->house->dia_chi,
                                'discount' => $rq->thoigiano * $bangtin->gia_thue * 5 / 100,
                                'tongtien' =>  $rq->thoigiano * $bangtin->gia_thue - $rq->thoigiano * $bangtin->gia_thue * 5 / 100
                                ]
                    ]);

                    Toastr::info('Đã thêm 1 sản phẩm vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
                    return redirect()->route('checkout-1');
                }
            }
        }
    	
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
