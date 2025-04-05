@extends('admin.layouts.master')
@section('title', 'List log action admin')

@section('body')
    <div class="container">
        <h1>Quản lý Log Admin</h1>

        <!-- Hiển thị bảng log -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Admin</th>
                    <th>Action</th>
                    <th>Data</th>
                    <th>Time</th>
                    <th>IP</th>
                    <th>Method</th>
                    <th>Route</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->user ? $log->user->name : 'Unknown' }}</td>
                    <td>{{ $log->action }}</td>
                    <td>{{ Str::limit($log->data, 50) }}</td> <!-- Hiển thị dữ liệu log, giới hạn độ dài -->
                    <td>{{ $log->time }}</td>
                    <td>{{ $log->ip }}</td>
                    <td>{{ $log->method }}</td>
                    <td>{{ $log->route }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
