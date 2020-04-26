<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Cart;

    use App\Models\bill;
    use App\Models\detail_bill;

use App\Models\payment;


use Toastr;


class BillController extends Controller
{
	public function post_bill(Request $bill2)
	{	
        $cart = Cart::content();
        $cart2 = Cart::total(0,',',''); // bỏ dấu chấm đê đúng giá tiền ra

        // echo $cart2;die;
		$bill = new bill;
		if($bill)
        {
			$bill->id_account = Auth::user()->id;
            $bill->id_payment  = $bill2->payment;
			$bill->id_status = 3;
            $bill->bill_total = $cart2;


			$bill->bill_name  = $bill2->name;
			$bill->bill_phone  = $bill2->phone;
			$bill->bill_address  = $bill2->address;
            $bill->bill_note  = $bill2->note;

			$bill->save();
        }
            $code= "DH-00000".$bill->id;
            $bill->bill_code = $code;
            $bill->save();


            if(count($cart)>0){
            	// $cart2 = Cart::total(0,',','.');
            	foreach($cart as $key => $sp){
	            	$detail = new detail_bill;
		            $detail->id_bill = $bill->id;
		            $detail->id_book = $sp->id;
		            $detail->qty = $sp->qty;

	            	$detail->save();	

            	}
            }

            Cart::destroy();
            Toastr::success('Đặt hàng thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);

            return redirect(''.Route('act.home').'');
	}



    //admin
    public function list()
	{
		$bill = bill::all();
		return view('admin.hoa-don.list',['bill'=>$bill]);
	}

	///page
	public function page_bill()
	{
		$user = Auth::user()->id;
		$list = bill::where('id_nguoidung','=',$user)->get();
		return view('page.user.don-hang',['list'=>$list]);
	}

	

	public function detail_bill($id)
	{
		$bill = bill::find($id);


		return view('page.account.detail_bill',['bill'=>$bill]);
	}



    public function status5($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = bill::where('id',$id)->update(['id_status'=>5]);
        //var_dump($data);die;
        // Session::put('msg','')
        Toastr::info('Đơn hàng đang xử lý', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
        
    }

    public function status6($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = bill::where('id',$id)->update(['id_status'=>6]);
        //var_dump($data);die;
        // Session::put('msg','')
        Toastr::info('Đơn hàng đang vận chuyển', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
        
    }

    public function status7($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = bill::where('id',$id)->update(['id_status'=>7]);
        //var_dump($data);die;
        // Session::put('msg','')
        Toastr::info('Giao hàng thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
        
    }

    public function status8($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = bill::where('id',$id)->update(['id_status'=>8]);
        //var_dump($data);die;
        // Session::put('msg','')
        Toastr::error('Đơn hàng đã hủy', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

}
