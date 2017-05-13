<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:webadmin');
    }

    public function index()
    {
        return view('admin.home'); //←表示Viewをhomeからadmin.homeへ変更。
    }
}
