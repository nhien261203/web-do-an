@extends('admin.layouts.master')
@section('title', 'Chi tiết sản phẩm')

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
                    Product Detail
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="/quantri/product/product-detail/create/{{$productId}}" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Create
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="card-header">

                    <form method="get">
                        <div class="input-group">
                            <input type="search" name="search" id="search" placeholder="Tìm kiếm thông tin....." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;
                                    Search
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                <!-- Thông báo thành công -->
                @if(session("alert"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session("alert")}}</strong>
                </div>
                @endif

                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="pl-4">Product Name</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Qty</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productDetails as $productDetail)
                            <tr>
                                <td class="pl-4 text-muted">{{$productDetail['product']['name']}}</td>
                                <td class="">{{$productDetail['color']}}</td>
                                <td class="">{{$productDetail['size']}}</td>
                                <td class="">{{$productDetail['qty']}}</td>

                                <td class="text-center">
                                    <a href="/quantri/product/product-detail/edit/{{$productDetail['id']}}" data-toggle="tooltip" title="Edit" data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                        <span class="btn-icon-wrapper opacity-8">
                                            <i class="fa fa-edit fa-w-20"></i>
                                        </span>
                                    </a>
                                    <form class="d-inline" action="/quantri/product/product-detail/destroy/{{$productDetail['id']}}" method="post">
                                        <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm" type="submit" data-toggle="tooltip" title="Delete" data-placement="bottom" onclick="return confirm('Do you really want to delete this item?')">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-trash fa-w-20"></i>
                                            </span>
                                        </button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="d-block card-footer">

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection