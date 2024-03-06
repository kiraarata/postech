<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    public function index(request $request, $alamat)
    {
        $result = "Hai ".$request->nama. " alamat kamu di " .$alamat. " dan id ".$request->id;
        return $result;
    }
}
