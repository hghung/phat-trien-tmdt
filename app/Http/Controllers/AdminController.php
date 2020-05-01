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
        
        
    	return view('admin.index');
    }


    public function master()
    {
        
        
    	return view('admin.master');
    }

    


}
