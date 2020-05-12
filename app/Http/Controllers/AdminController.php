<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

Use Illuminate\Support\Facades\Auth;

use Toastr;



class AdminController extends Controller
{
    public function home()
    {
        if(Auth::check())
        {
            return view('admin.index');

        }
        else
        {
            return redirect(''.route('page.home').'');
        }
        
    }


    public function master()
    {
        
        
    	return view('admin.master');
    }

    


}
