<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassportTokenController extends Controller
{
    public function index()
    {
        return view('admin.passport.index');
    }
}
