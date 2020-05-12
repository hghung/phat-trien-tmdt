<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        
        
    	return view('house.index');
    }

    public function dangky()
    {
        
        
    	return view('house.reg');
    }


    public function list()
    {
        
        
    	return view('house.list');
    }

    public function list_2()
    {
        
        
    	return view('house.list_2');
    }

    public function single()
    {
        
        
    	return view('house.single');
    }

    

   
}
