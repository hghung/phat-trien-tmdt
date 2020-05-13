<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\khach_hang;

Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use Toastr;


use App\Models\District;
use App\Models\Province;
use App\Models\Ward;


class TaikhoanController extends Controller
{	
	public function login()
    {
        if(!Auth::check())
        {
            return view('page.home');
        }
        else
        {
            return redirect(''.Route('act.home').'');
            /// rediect thay vì route để kiêm tra user đã đăng nhập chưa vào act.home đã có sẳn rùi nên mới route dc

        }

    }   

    

    public function post_reg(Request $reg)
    {
        // $this->validate($reg,[
        //     'phone' =>'required|max:10',
        //     'name' =>'required|min:2|max:15',
        //     'lastname' =>'required|min:2|max:8',
        //     'username' =>'required|min:4|max:15|unique:account,username',
        //     'email' => 'required|email|max:32|unique:info,info_email',
        //     'password' => 'required|min:3|max:50',
        //     'confirmpassword' => 'required|same:password',
            
        // ],[

        //     'phone.required' => 'Bạn chưa nhập số điện thoại !',
        //     'phone.max' => 'Số điện thoại không được hơn 10 số !',

        //     'name.required' => 'Bạn chưa nhập tên !',
        //     'name.min' => 'Tên tối thiếu 2 ký tự !',
        //     'name.max' => 'Tên tối đa 15 ký tự !',

        //     'lastname.required' => 'Bạn chưa nhập Họ !',
        //     'lastname.min' => 'Họ tối thiếu 2 ký tự !',
        //     'lastname.max' => 'Họ tối đa 10 ký tự !',

        //     'username.required' => 'Bạn chưa nhập tên đăng nhập !',
        //     'username.min' => 'Tên đăng nhập tối thiểu 4 ký tự trở lên !',
        //     'username.max' => 'Tên đăng nhập không được vượt hơn 15 ký tự !',
        //     'username.unique' => 'Tên đăng nhập đã tồn tại !',


        //     'email.required' => 'Bạn chưa nhập Email !',
        //     'email.email' => 'Định dạng Email chưa đúng vd: @gmail.com !',
        //     'email.max' => 'Email không được vượt hơn 32 ký tự !',
        //     'email.unique' => 'Email đã tồn tại !',


        //     'password.required' => 'Bạn chưa nhập mật khẩu !',
        //     'password.min' => 'Mật khẩu phải có it nhât 6 ký tự !',
        //     'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự !',
        //     'confirmpassword.required' => 'Bạn chưa nhập lại mật khẩu !',
        //     'confirmpassword.same' => 'Nhập lại mật khẩu không trùng khớp !'
        // ]);

        $account = new User;
        
            $account->username = $reg->username;
            $account->password = bcrypt($reg->password);
            $account->vai_tro = '2';
            $account->status = '1';

            // echo $account; die;
            $account->save();

        if($account)
        {
            // info
            $user = new khach_hang;
            $user->kh_ten = $reg->name;
            $user->kh_ho = $reg->lastname;

            $user->kh_email = $reg->email;
            $user->kh_gioitinh = $reg->gioi_tinh;
            $user->kh_birthday = $reg->birthday;


            $user->kh_cmnd = $reg->cmnd;
            $user->kh_phone = $reg->phone;
            $user->id_user = $account->id;
            // dia chi
            $user->kh_province = $reg->tinhthanh;
            $user->kh_district = $reg->quanhuyen;
            $user->kh_ward = $reg->phuongxa;
            $user->kh_address = $reg->diachi;
            // 
            // 
            $user->id_user = $account->id;
            // echo $user; die;   
            $user->save();
        }
            $user->kh_ma = "USER-000".$user->id;
            $user->save();

         
            

            
        Toastr::success('Đăng ký thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
       
        





        return redirect(''.route('page.home').'')->with('reg','Chúc mừng bạn đã đăng ký thành công');
    }

    public function post_lg(Request $lg)
    {
    	$this->validate($lg,[
            'username' => 'required',
            'password' =>'required|min:3|max:32',
            
        ],[
            'username.required' => 'Bạn chưa nhập tài khoản !',
            'password.required' => 'Bạn chưa nhập mật khẩu !',
        ]);

        $username =  $lg->username;
        $password = $lg->password;
        // echo $lg->username;
        // echo $lg->password;/
        // die;


        if(Auth::attempt(['username'=>$username,'password'=>$password]))
            if(Auth::user()->status == 1)
            {
                    Toastr::success('Hi '.Auth::user()->member->kh_ten.'', 'Welcome', ["positionClass" => "toast-top-right"]);

                    // echo "Thanh Cong";die;
                    return redirect(''.route('page.home').'');

               
            }
            else
            {
                echo "tai khoan bi khoa";die;

                return redirect()->back()->with('disable','Tài khoản bạn đã bị khóa !');
            }
        else
            echo "tai khoan mat khau sai";die;

             return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

/////////////////////////////////////////////////////////
    public function myacount()
    {   
        $province = Province::all();
        $district = District::all();
        $ward = Ward::all();

        $bill = bill::where('id_account','=',Auth::user()->id)->where('id_status','=',3)->get();
        $bill2 = bill::where('id_account','=',Auth::user()->id)->get();



        
        return view('page.account.dashboard',['bill2' => $bill2, 'bill' => $bill, 'province' => $province, 'district' => $district, 'ward' => $ward]);
        
        

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


// ////////////////////////////////////////////////////////////////////////////
    public function edit($id)
    {   
        $user = User::find($id);
        return view('page.user.edit',['user'=>$user]);
    }

    public function post_edit($id, Request $tk)
    {
        $this->validate($tk,[
            'hoten' => 'required|min:2|max:32',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:10',


           
        ],[
            'email.required' => 'Bạn chưa nhập Email !',
            'email.email' => 'Định dạng Email chưa đúng vd: @gmail.com !',
            'email.max' => 'Email không được vượt hơn 50 ký tự !',
            // 'email.unique' => 'Email đã được đăng ký !',


            'phone.required' => 'Số điện thoại chưa nhập !',
            'phone.min' => 'Số điện thoại phải đủ 10 số !',
            'phone.max' => 'Số điện thoại không quá 10 số !',

            'hoten.required' => 'Bạn chưa nhập tên !',
            'hoten.min' => 'Tên tối thiểu 2 ký tự trở lên !',
            'hoten.max' => 'Tên không được vượt hơn 32 ký tự !',

            
           
        ]);

            $user = User::find($id);
             $user->name = $tk->hoten;
             $user->email = $tk->email;
             $user->dia_chi = $tk->diachi;
             $user->ngay_sinh = $tk->ngaysinh;

             
             $user->phone = $tk->phone;

             $oldPassword = $tk->oldpassword;
                $newPassword = $tk->password;


            if($tk->changepassword == "on")
            {   
             // <!-- sư dụng Auth thay vì $user vì Auth mạnh hơn -->
                if(Auth::user()->vai_tro == 1)
                {
                    $this->validate($tk,[
                        'password' => 'required|min:3|max:32',
                        'passwordAgain' => 'required|same:password'
                    ],[
                        'password.required' => 'Bạn chưa nhập mật khẩu',
                        'password.min' => 'Mật khẩu phải có it nhât 3 ký tự',
                        'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
                        'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                        'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
                    ]);

                    $user->password= bcrypt($newPassword);
                
                }
                else
                {
                    //nhớ phải !, hàm 
                    if(!Hash::check($oldPassword, Auth::user()->password))
                    {
                        return redirect()->back()->with('oldpw','Mật khẩu không khớp với mật khẩu hiện tại');
                    }
                    else
                    {
                        $this->validate($tk,[
                            'password' => 'required|min:3|max:32',
                            'passwordAgain' => 'required|same:password'
                        ],[
                            'password.required' => 'Bạn chưa nhập mật khẩu',
                            'password.min' => 'Mật khẩu phải có it nhât 3 ký tự',
                            'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
                            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
                        ]);

                        $user->password= bcrypt($newPassword);
                    }
                }
            }

             $user->save();
             return redirect()->bacK()->with('tintucxoa','Bạn đã xóa thành công...!');
    }

    // public function list()
    // {
    //     $loaisanpham = User::all();
    //     return view('admin.user.list',['loaisanpham' => $loaisanpham]);
    // }

}
