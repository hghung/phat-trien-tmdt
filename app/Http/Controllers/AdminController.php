<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

Use Illuminate\Support\Facades\Auth;

use Toastr;

use Artisan;

class AdminController extends Controller
{
    public function home()
    {
        
        $thanhvien = User::where('status','=','2')->get();
        // $follow = User::sum('views');
        return view('admin.index');

        
        
    }

    public function backup()
    {
        // $schedule->command('backup:clean')->daily()->at('01:00');

        return view('admin.backup.backup');
        
    }

    

    public function run_backup()
    {
        $backup = Artisan::call('backup:run');
        // echo "banhbao";
        return redirect()->back()->with('backup','Dữ liệu của bạn được backup thành công !');
        
    }

    public function delete_backup()
    {
        $backup = Artisan::call('backup:clean');
        // echo "banhbao";
        return redirect()->back()->with('delete','Dữ liệu backup đã được xóa sạch !');
        
    }


    public function master()
    {
        
        
    	return view('admin.master');
    }

    


}
