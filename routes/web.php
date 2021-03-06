<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
use App\User;

use App\Models\taisan;

use App\Models\loainha;

use App\Models\tienich;
use App\Models\payment;


Route::get('/','PageController@home');

Route::get('/gg','PageController@googlemap');
Route::get('/gg1','PageController@gg1');


// googlemap



Route::post('/tim-kiem','TimkiemController@post_search')->name('timkiem');
Route::get('/loai-nha-{id}','TimkiemController@post_loainha')->name('timkiem.loainha');

	 
Route::post('/like', 'LikeController@like_bangtin')->name('like2');

Route::get('/trang-chu','PageController@home')->name('page.home');

Route::get('/dang-ky','PageController@dangky')->name('page.reg');

Route::post('/dang-ky','Login_RegController@post_reg')->name('page.reg.post');


Route::get('/dang-nhap','PageController@login')->name('page.login');

Route::post('/dang-nhap','Login_RegController@post_lg')->name('page.login.post');

Route::get('/dang-xuat','Login_RegController@logout')->name('page.logout');

// tim kiem
Route::get('/trang-chu','PageController@home')->name('page.home');

//payment
Route::post('/thanh-toan-vnpay','CheckoutController@create')->name('vnpay');
Route::get('/return-vnpay','PaymentController@return2')->name('vnpay2');
Route::post('/config-vnpay','PaymentController@config')->name('vnpay.config');

Route::get('/return-vnpay','PaymentController@return')->name('return.post.vnpay');

Route::get('/danh-sach-bang-tin','PageController@list')->name('page.list');

Route::get('/san-pham-{id}','PageController@single')->name('deatil.bangtin');

// checkout start
Route::get('/checkout-1','CheckoutController@checkout_1')->name('checkout-1');
Route::get('/checkout-2','CheckoutController@checkout_2')->name('checkout-2');


Route::post('/them-bang-tin-{id}','CheckoutController@addCart')->name('addcart');
Route::get('/cap-bang-tin-pham','CheckoutController@update')->name('updatecart');
Route::get('/xoa-bang-tin-{id}','CheckoutController@delCart')->name('delcart');


// end checkout

// Taikhoan ///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'tai-khoan','middleware'=>'Page_login'],function(){

	Route::get('/quan-huyen/{id_province}','PageController@ajax_district');
	Route::get('/phuong-xa/{id_ward}','PageController@ajax_ward');
	Route::get('/dashboard','TaikhoanController@dashboard')->name('taikhoan.dashboard');

	Route::get('/bang-tin','TaikhoanController@ds_bangtin')->name('taikhoan.dsbangtin');
	Route::get('/dang-tin','TaikhoanController@dangtin')->name('taikhoan.dangtin');
	Route::post('/dang-tin','BangtinController@post_add')->name('bangtin.post.add');



	Route::get('/thong-tin-tai-khoan','TaikhoanController@profile')->name('taikhoan.profile');
	Route::post('/update-profile-{id}','TaikhoanController@update_profile')->name('taikhoan.update.profile');

	Route::get('/update-password','TaikhoanController@password')->name('taikhoan.password');
	Route::post('/update-passsword-{id}','TaikhoanController@update_password')->name('taikhoan.update.password');

	//hop dong
	Route::get('/hop-dong','ContractController@contract')->name('taikhoan.hopdong');
	Route::get('/hop-dong-{id}','ContractController@detail_contract')->name('detail.contract');


});


// admin ///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'SPS', 'middleware'=>'Ad_login'],function(){
	Route::get('/','AdminController@home')->name('admin.home');
	Route::get('/master','AdminController@master')->name('admin.lyout');

	Route::get('/thong-ke','ChartController@chart')->name('admin.chart');



	Route::group(['prefix'=>'loai-nha'],function(){
		Route::get('/','LoainhaController@list')->name('loainha.list');
		Route::post('/add','LoainhaController@post_add')->name('loainha.post.add');


	});

	Route::group(['prefix'=>'backup'],function(){
		Route::get('/','BackupController@backup')->name('backup');
		
		Route::get('/run','BackupController@run_backup')->name('backup.run');

		Route::get('/delete','BackupController@delete_backup')->name('delete.run');

		// Route::get('/add','LoainhaController@post_add')->name('backup.add');


	});

	Route::group(['prefix'=>'tai-san'],function(){
		Route::get('/','TaisanController@list')->name('taisan.list');
		Route::post('/add','TaisanController@post_add')->name('taisan.post.add');


	});

	Route::group(['prefix'=>'bang-tin'],function(){
		Route::get('/','BangtinController@list')->name('bangtin.list');
		Route::get('/add','BangtinController@add')->name('bangtin.add');
		Route::post('/post-add','BangtinController@post_add')->name('bangtin.post.add');

		//Khoi phuc dữ liệu Softdelte
		Route::get('/danh-sach-khoi-phuc','BangtinController@list_restore')->name('bangtin.list.restore');

		Route::get('/khoi-phuc-{id}','BangtinController@restore')->name('bangtin.restore');


		//xoa bangtin
		Route::get('/delete-{id}','BangtinController@delete')->name('bangtin.delete');


	});

});



Route::get('/play',function(){

	$loainha = new loainha;
	$loainha->ten_loai = 'Cấp 1';
	$loainha->save();

	$loainha = new loainha;
	$loainha->ten_loai = 'Cấp 2';
	$loainha->save();

	$loainha = new loainha;
	$loainha->ten_loai = 'Cấp 3';
	$loainha->save();

	$loainha = new loainha;
	$loainha->ten_loai = 'Cấp 4';
	$loainha->save();

	$loainha = new loainha;
	$loainha->ten_loai = 'Villa';
	$loainha->save();

	$loainha = new loainha;
	$loainha->ten_loai = 'Biệt thự';
	$loainha->save();

	// 
	$taisan = new taisan;
	$taisan->ten_ts = 'TV';
	$taisan->save();

	$taisan = new taisan;
	$taisan->ten_ts = 'Điều hòa';
	$taisan->save();

	$taisan = new taisan;
	$taisan->ten_ts = 'Tủ lạnh';
	$taisan->save();

	$taisan = new taisan;
	$taisan->ten_ts = 'Bàn ghế';
	$taisan->save();

	$taisan = new taisan;
	$taisan->ten_ts = 'Máy giặt';
	$taisan->save();

	//
	$tienich = new tienich;
	$tienich->tien_ich = 'Sân vườn';
	$tienich->save();
	
	$tienich = new tienich;
	$tienich->tien_ich = 'Hồ bơi';
	$tienich->save();

	$tienich = new tienich;
	$tienich->tien_ich = 'Nhà xe';
	$tienich->save();

	$tienich = new tienich;
	$tienich->tien_ich = 'Trung tâm';
	$tienich->save();


	$tienich = new tienich;
	$tienich->tien_ich = 'Gần chợ';
	$tienich->save();

	$tienich = new tienich;
	$tienich->tien_ich = 'Gần trường';
	$tienich->save();

	$tienich = new tienich;
	$tienich->tien_ich = 'Gần siêu thị';
	$tienich->save();

	$tienich = new tienich;
	$tienich->tien_ich = 'Gần bệnh viện';
	$tienich->save();

	$tienich = new payment;
	$tienich->phuong_thuc = 'Thanh toán khi nhận hàng';
	$tienich->save();

	$tienich = new payment;
	$tienich->phuong_thuc = 'VN-Pay';
	$tienich->save();
	

	
	
});

Route::get('/banhbao',function(){
	$user = new vai_tro;
	$user->ten_vai_tro = 'Admin';
	$user->save();
	$user = new vai_tro;
	$user->ten_vai_tro = 'Thành viên';
	$user->save();
	$user = new vai_tro;
	$user->ten_vai_tro = 'Khách hàng';
	$user->save();
	// add user admin
	$user = new User;
	$user->username='admin';
	$user->password=bcrypt('123');
	$user->name='Phong Phu';
	$user->email = 'ntkd@gmail.com';
	$user->phone = '0762999994';
	$user->ngay_sinh = '1998-01-01';
	$user->trang_thai = '1';
	$user->dia_chi = 'Vĩnh Long';
	$user->vai_tro = '1';
	$user->create = Carbon::now('Asia/Ho_Chi_Minh');
	$user->save();


});

////////////////////////s
Route::get('/update-{id}','TaikhoanController@update_mk');






