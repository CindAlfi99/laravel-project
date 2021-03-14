<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanConstumer extends Controller
{
    public function index()
    {
        $constumers = DB::table('users')->get();
        //seperti var_dump()
        // dump($constumers);
        return view('laporan.index', ['constumers' => $constumers]);
    }
}
