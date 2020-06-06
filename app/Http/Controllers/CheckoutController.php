<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
Use Illuminate\Support\Facades\Auth;
use App\Models\bangtin;
use App\Models\Province;
use App\Models\payment;
use App\Models\hopdong;

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
            if(!Auth::check())
            {
                Toastr::warning('Bạn chưa đăng nhập', 'Thông báo', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
            else
            {
                return view('house.checkout.checkout-1',$data,$now);
            }
    
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

                if(!Auth::user()->member->kh_address && !Auth::user()->member->kh_province && !Auth::user()->member->kh_district && !Auth::user()->member->kh_ward )
                {
                    // echo "banhbao";die;
                    Toastr::warning('Bạn chưa cập thông tin tài khoản', 'Thông báo', ["positionClass" => "toast-top-right"]);
                    return redirect()->route('taikhoan.profile');
                }
                else
                {
                    // echo "banhbao2";die;

                 return view('house.checkout.checkout-2',$data,$now);
                }
        
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

    // Ngân hàng: NCB
    // Số thẻ: 9704198526191432198
    // Tên chủ thẻ:NGUYEN VAN A
    // Ngày phát hành:07/15
    // Mật khẩu OTP:123456
    public function create(Request $request)
    {   

        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "VVULVOU2"; //Mã website tại VNPAY 
        $vnp_HashSecret = "SBKILOMMRSKUSLHMVFYFATIDBLYKYDAU"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('checkout-3');
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->input('amount') * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }

        
        //////////////////////////////////////////////////////////////
        $data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
        $data['cart'] = Cart::content();
        $now['now2'] = Carbon::now(); // cách viet mơi sang view
        foreach($data['cart'] as $checkout)
        {
            // dd($checkout);
        }

        // //chuyên  sáng đụng đinh dạng ngày
        // $ngayo = Carbon::parse($checkout->options->ngayden) ; 
        // // $dt = Carbon::now();
        // // $dt2 = date("d-m-Y",strtotime($dt));
        // // echo $ngayo;die;
        // $time = $checkout->options->thoigiano;
        // // echo $time;die;
       
        // $end = $ngayo->addMonths($time);  
        // echo $ngayo ."banhbao". $end;die;
        $bangtin = bangtin::find($checkout->id);
        // lấy thông tin của chủ nhà

        // dd($bangtin);
       
        $hopdong = new hopdong;
        // người thuê
        $hopdong->user1_hoten = Auth::user()->member->kh_ho ."&nbsp". Auth::user()->member->kh_ten ;
        // đê có cach khi 2 biên php thì phải &nbsp
        $hopdong->user1_cmnd = Auth::user()->member->kh_cmnd ;
        $hopdong->user1_phone = Auth::user()->member->kh_phone ;
        $hopdong->user1_email = Auth::user()->member->kh_email ;
        $hopdong->user1_diachi = Auth::user()->member->kh_address.","."&nbsp".Auth::user()->member->ward->ward_prefix."&nbsp".Auth::user()->member->ward->ward_name.","."&nbsp".Auth::user()->member->district->district_prefix."&nbsp".Auth::user()->member->district->district_name.","."&nbsp".Auth::user()->member->province->province_name ;

        // chủ nhà
        $hopdong->user2_hoten = $bangtin->user->member->kh_ho ."&nbsp". $bangtin->user->member->kh_ten ;
        // đê có cach khi 2 biên php thì phải &nbsp
        $hopdong->user2_cmnd = $bangtin->user->member->kh_cmnd ;
        $hopdong->user2_phone = $bangtin->user->member->kh_phone ;
        $hopdong->user2_email = $bangtin->user->member->kh_email ;
        $hopdong->user2_diachi = $bangtin->user->member->kh_address.", &nbsp".$bangtin->user->member->ward->ward_prefix."&nbsp".$bangtin->user->member->ward->ward_name.", &nbsp".$bangtin->user->member->district->district_prefix."&nbsp".$bangtin->user->member->district->district_name.", &nbsp".$bangtin->user->member->province->province_name ; 
        
        $hopdong->ma_bangtin = $bangtin->code_bangtin;
        $hopdong->ma_nha = $bangtin->house->ma_nha;
        $hopdong->thoi_gianthue = $checkout->options->thoigiano;
        // tinh ngay tháng năm
        $hopdong->time_start = Carbon::parse($checkout->options->ngayden);
        $start = Carbon::parse($checkout->options->ngayden) ; 
        $end = $start->addMonths($checkout->options->thoigiano);  
        $hopdong->time_end = $end;

        $hopdong->ma_giaodich = $vnp_TxnRef;

        $hopdong->time_giao_dich = Carbon::now();
        $hopdong->tien = $vnp_Amount;
        $hopdong->card = '9871 8211 6278';
        $hopdong->loainha = $bangtin->house->loainha->ten_loai;

        $hopdong->id_thanhtoan = '2';
        $hopdong->id_user1 = Auth::user()->id;
        $hopdong->id_user2 = $bangtin->user->id;
        $hopdong->id_bangtin = $bangtin->id;

        
        $hopdong->save();
        
        $hopdong->ma_hopdong = "CONTRACT-000".$hopdong->id;
        $hopdong->save();

        return redirect($vnp_Url);


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
