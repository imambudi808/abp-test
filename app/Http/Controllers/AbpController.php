<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbpController extends Controller
{
    public function getMahasiswa(Request $request,$nim,$dir2)
    {
        $userAgent = $request->header('User-Agent');
        return 'NIM:'.$nim.'user agentnya'.$userAgent; //yg gampang
        
    }
}
