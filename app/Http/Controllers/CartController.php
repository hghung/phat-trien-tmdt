<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
Use Illuminate\Support\Facades\Auth;
use App\Models\book;
use App\Models\Province;

use Toastr;






class CartController extends Controller
{	

  public function cart(){
    
    $data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
    $data['cart'] = Cart::content();
    return view('page.cart.cart',$data);
  }



    public function addCart($id)
    {
    	// dd($id);
    	$book = book::find($id);
        if(Auth::user()->id == $book->id_account)
        {
            
            Toastr::warning('Sản phẩm của bạn không được đưa vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else
        {
            Cart::add(['id' => $id,  
                'name' => $book->book_title,
                'qty' => 1,
                'price' => $book->book_price,
                'weight' => $book->book_weight,
                'options' => ['img' => $book->book_image]]);

            Toastr::info('Đã thêm 1 sản phẩm vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    	
    	// $data = Cart::content();
    	// dd($data);
   	}

    public function update(Request $request){
      $qty = $request->qty;
      $rowId = $request->rowId;
      // update cart
      Cart::update($rowId,$qty);
      Toastr::info('Cập nhật giỏ hàng thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);

      
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

    public function checkout()
    {

        $data['total'] = Cart::total(0,',','.'); // cấu hinh format năm ở trong đây ở ngoài html ko sư dụng dc
        $data['cart'] = Cart::content();

        if(Cart::count()>= 1)
        {   
            if(Auth::user()->delivery)
            {
                return view('page.cart.checkout',$data);
            }
            else
            {
                Toastr::warning('Bạn chưa cập nhật đia chỉ nhận hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
                return redirect(''.Route('act.home').'');

            }

        }
        else
        {
            return redirect(''.Route('cart').'');

        }
    }
}
