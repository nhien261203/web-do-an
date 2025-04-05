<?php

namespace App\Services;

use App\Models\LogActionAdminTool;
use Illuminate\Support\Facades\Auth;

class LogService
{
    public function logAdminAction($action, $data = null)
    {
        LogActionAdminTool::create([
            'admin' => Auth::id(),  // ID của admin đang đăng nhập
            'action' => $action,    // Mô tả hành động
            'data' => $data,        // Dữ liệu liên quan đến hành động (nếu có)
            'time' => now(),        // Thời gian thực hiện hành động
            'method' => request()->method(),  // Phương thức HTTP (GET, POST, PUT, DELETE)
            'route' => request()->route()->getName(), // Tên route hiện tại
            'ip' => request()->ip(), // Địa chỉ IP của admin
        ]);
    }
}
