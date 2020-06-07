<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;


use App\Models\hopdong;

class ContractController extends Controller
{
    public function contract()
    {
        $hopdong = hopdong::where('id_user1','=', Auth::user()->id)->get();
        return view('house.account.contract',['hopdong' => $hopdong]);
    }

    public function detail_contract($id)
    {
        $hopdong['hopdong'] = hopdong::find($id);
        return view('house.account.detail-contract',$hopdong);
    
    }
}
