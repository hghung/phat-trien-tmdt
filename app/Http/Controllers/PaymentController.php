<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{   
    // Ngân hàng: NCB
    // Số thẻ: 9704198526191432198
    // Tên chủ thẻ:NGUYEN VAN A
    // Ngày phát hành:07/15
    // Mật khẩu OTP:123456
    public function create(Request $request)
    {   

        $response = \VNPay::purchase([
            'vnp_Url' => 'http://sandbox.vnpayment.vn/paymentv2/vpcpay.html',
            'vnp_TxnRef' => time(),
            'vnp_OrderType' => 100000,
            'vnp_OrderInfo' => time(),
            'vnp_IpAddr' => '127.0.0.1',
            'vnp_Amount' => 1000000,
            'vnp_ReturnUrl' => 'https://github.com/phpviet',
        ])->send();
        
        if ($response->isRedirect()) {
            $redirectUrl = $response->getRedirectUrl();
            
            // TODO: chuyển khách sang trang VNPay để thanh toán
        }

    }

    public function return(Request $request)
    {
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
            $this->apSer->thanhtoanonline(session('cost_id'));
            return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
    


}
