@extends('admin.layouts.master')
@section('title', 'Đơn hàng sản phẩm')

@section('body')

<!-- Main -->
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Order
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="card-header">

                    <form>
                        <div class="input-group">
                            <input type="search" name="search" id="search" placeholder="Search everything" class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;
                                    Search
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Customer / Products</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td class="text-center text-muted">#{{$order->id}}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img style="height: 60px;" data-toggle="tooltip" title="Image" data-placement="bottom" src="/admin/assets/images/products/{{ $order->orderDetails[0]->product->productImage[0]->path ?? '' }}" alt="NhomNhom Shop">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $order->first_name . ' ' . $order->last_name }}</div>
                                                <div class="widget-subheading opacity-7">
                                                    @if (isset($order) &&
                                                    isset($order->orderDetails) &&
                                                    count($order->orderDetails) > 0 &&
                                                    isset($order->orderDetails[0]->product) &&
                                                    isset($order->orderDetails[0]->product->name))
                                                    {{ $order->orderDetails[0]->product->name }}
                                                    @else
                                                    Không có sản phẩm
                                                    @endif
                                                    @if (count($order->orderDetails) > 1)
                                                    và {{ count($order->orderDetails) }} (sản phẩm khác)
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{ $order->street_address . ' - ' . $order->town_city }}

                                </td>
                                <td class="text-center">${{ number_format(array_sum(array_column($order->orderDetails->toArray(), 'total')), 0, ',', '.') }}
                                </td>
                                <td class="text-center">
                                    <div class="badge badge-dark">
                                        {{ \App\Utilities\Constant::$order_status[$order->status] }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="/quantri/order/show/{{$order->id}}" class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                        Details
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-block card-footer">
                    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700 leading-5">
                                    Hiển thị
                                    <span class="font-medium">{{ $startResult }}</span>
                                    tới
                                    <span class="font-medium">{{ $endResult }}</span>
                                    trên
                                    <span class="font-medium">{{ $totalResults }}</span>
                                    kết quả
                                </p>
                            </div>

                            <div>
                                {{ $orders->links("pagination::bootstrap-4") }}
                            </div>

                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection