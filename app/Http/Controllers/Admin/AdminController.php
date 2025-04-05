<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LogActionAdminTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    // public function index(Request $request)
    // {
    //     return view('Admin.dashboard.index');
    // }

    public function logout()
    {
        // $request->session()->forget("email");
        Auth::logout();
        return redirect("/login");
    }

    
}
