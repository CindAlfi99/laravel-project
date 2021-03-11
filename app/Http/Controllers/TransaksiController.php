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
    public function show()
    {
        return view('transaksi.index', ['data' => array('1' => 'foo')]);
    }
}