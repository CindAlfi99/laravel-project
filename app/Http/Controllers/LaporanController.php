<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $customers = DB::table('users')->get();
        //seperti var_dump()
        // dump($customer);
        return view('admin.laporan', ['customers' => $customers]);
    }
}
