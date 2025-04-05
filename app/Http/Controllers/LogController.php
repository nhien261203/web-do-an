<?php

namespace App\Http\Controllers;

use App\Models\LogActionAdminTool;
use Illuminate\Http\Request;

class LogController extends Controller
{
    

    public function index()
    {
        // Lấy tất cả các log hành động của admin, có thể thêm phân trang nếu số lượng log lớn
        $logs = LogActionAdminTool::orderBy('time', 'desc')->paginate(15); // Phân trang 15 log mỗi trang

        // Trả về view với dữ liệu log
        return view('Admin.log.index', compact('logs'));
    }

}
