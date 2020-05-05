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

use Carbon\Carbon; // lấy ngày hiên tại

Route::get('/','PageController@home');
Route::get('/trang-chu','PageController@home')->name('page.home');

Route::get('/danh-sach-1','PageController@list')->name('page.list');
Route::get('/danh-sach-2','PageController@list_2')->name('page.list2');





Route::group(['prefix'=>'SPS'],function(){
	Route::get('/','AdminController@home')->name('admin.home');
	Route::get('/master','AdminController@master')->name('admin.lyout');

	Route::group(['prefix'=>'loai-nha'],function(){
		Route::get('/','LoainhaController@list')->name('loainha.list');
		Route::post('/add','LoainhaController@post_add')->name('loainha.post.add');


	});

	Route::group(['prefix'=>'tai-san'],function(){
		Route::get('/','TaisanController@list')->name('taisan.list');
		Route::post('/add','TaisanController@post_add')->name('taisan.post.add');


	});

	Route::group(['prefix'=>'bang-tin'],function(){
		Route::get('/','BangtinController@list')->name('bangtin.list');
		Route::get('/add','BangtinController@add')->name('bangtin.add');
		Route::post('/post-add','BangtinController@post_add')->name('taisan.post.add');



	});

});



Route::get('/play',function(){
	$user = new role;
	$user->role_name = 'Admin';
	$user->save();

	$user = new role;
	$user->role_name = 'Member';
	$user->save();

	$user = new status;
	$user->Status_name = 'Hiện';
	$user->Status_note = 'Sản phẩm còn hàng hoặc hiện đánh giá';

	$user->save();

	$user = new status;
	$user->Status_name = 'Ẩn';
	$user->Status_note = 'Sản phẩm hết hàng hoặc ẩn đánh giá';
	$user->save();

	$user = new status;
	$user->Status_name = 'Đang xử lý';
	$user->Status_note = 'Đơn hàng vừa được order';
	$user->save();

	$user = new status;
	$user->Status_name = 'Xác nhận đơn hàng';
	$user->Status_note = 'Đơn hàng được xác nhận';
	$user->save();

	$user = new status;
	$user->Status_name = 'Đang vận chuyển';
	$user->Status_note = 'Đơn hàng được đang vận chuyển';

	$user->save();

	$user = new status;
	$user->Status_name = 'Giao hàng';
	$user->Status_note = 'Đơn hàng đang được giao';
	$user->save();

	$user = new status;
	$user->Status_name = 'Giao hàng thành công';
	$user->Status_note = 'Đã giao hàng thành công';
	$user->save();

	$user = new status;
	$user->Status_name = 'Hủy đơn hàng';
	$user->Status_note = 'Đơn hàng đã hủy';
	$user->save();


	$user = new payment;
	$user->payment_name = 'Thanh toán khi nhận hàng';
	$user->payment_note = 'Giao hàng nhận tiền';
	$user->save();

	$user = new payment;
	$user->payment_name = 'Thanh toán khi Paypal';
	$user->payment_note = 'Thanh toán bẳng thẻ';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 1';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 2';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 3';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 4';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 5';
	$user->save();

	
	$user = new category;
	$user->category_name = 'Danh muc 6';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 7';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 8';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 9';
	$user->save();

	$user = new category;
	$user->category_name = 'Danh muc 10';
	$user->save();

	
	
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
Route::get('foo', function () {
    return view('admin.book.test');
});






