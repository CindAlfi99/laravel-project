<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.transaksi', ['data' => array('1' => 'foo')]);
    }
}