<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoainhaController extends Controller
{
    public function list()
    {
    	return view('admin.loainha.list');
    }
}
