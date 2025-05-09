@extends('FrontEnd.layouts.master')
@section('title', 'Trang Chủ')

@section('body')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        @foreach($sliders as $slider)
        <div class="single-hero-items set-bg" data-setbg="/admin/assets/images/sliders/{{$slider['path'] ?? 'default-avatar.png'}}">
        </div>
        @endforeach
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner" onclick="window.location.href='/shop/filter/category/Điện thoại'">
                    <img src="./img/banner-1.jpg" alt="">
                    <div class="inner-text">
                        <h4>Điện Thoại</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" onclick="window.location.href='/shop/filter/category/Laptop'">
                <div class="single-banner">
                    <img src="./img/banner-2.jpg" alt="">
                    <div class="inner-text">
                        <h4>Máy tính</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" onclick="window.location.href='/shop/filter/category/Phụ kiện'">
                <div class="single-banner">
                    <img src="./img/banner-3.jpg" alt="">
                    <div class="inner-text">
                        <h4>Phụ kiện</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Women Banner Section - Phone Products UI -->
{{-- <section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                    <h2>Quần áo nữ</h2>
                    <a href="/shop">Khám Phá Thêm</a>
                </div>
            </div>

            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active item" data-tag="*" data-category="phone">ALL</li>
                        <li class="item" data-tag=".Quần-nam" data-category="phone">Quần nam</li>
                        <li class="item" data-tag=".Áo-nam" data-category="phone">Áo nam</li>
                        <li class="item" data-tag=".Phụ-kiện-nam" data-category="phone">Phụ kiện nam</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel phone">
                    @foreach($phoneProducts as $phoneProduct)
                    @php
                    $categoryTag = $categoryTagMapping[$phoneProduct->product_category_id] ?? '';
                    @endphp
                    <div class="product-item item {{ $categoryTag }}">
                        <div class="pi-pic">
                            <img src="/admin/assets/images/products/{{$phoneProduct->productImage[0]->path ?? ''}}" alt="">

                            @if($phoneProduct->discount != null)
                            <div class="sale">Sale</div>
                            @endif
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="javascript:addCart({{ $phoneProduct->id }})"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="/shop/product-detail/{{$phoneProduct->id}}">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">{{ str_replace('-', ' ', $categoryTag) }}</div>
                            <a href="/shop/product-detail/{{$phoneProduct->id}}">
                                <h5>{{$phoneProduct->name}}</h5>
                            </a>
                            <!-- For phoneProducts section -->
                            <div class="product-price">
                                @if($phoneProduct->discount != null)
                                {{ number_format($phoneProduct->discount, 0, ',', '.') }} đ
                                <span>{{ number_format($phoneProduct->price, 0, ',', '.') }} đ</span>
                                @else
                                {{ number_format($phoneProduct->price, 0, ',', '.') }} đ
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Women Banner Section End -->

<!-- Man Banner Section Begin -->
{{-- <section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active item" data-tag="*" data-category="laptop">ALL</li>
                        <li class="item" data-tag=".Quần-nữ" data-category="laptop">Quần nữ</li>
                        <li class="item" data-tag=".Áo-nữ" data-category="laptop">Áo nữ</li>
                        <li class="item" data-tag=".Phụ-kiện-nữ" data-category="laptop">Phụ kiện nữ</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel laptop">
                    @foreach($laptopProducts as $laptopProduct)
                    @php
                    $categoryTag = $categoryTagMapping[$laptopProduct->product_category_id] ?? '';
                    @endphp
                    <div class="product-item item {{ $categoryTag }}">
                        <div class="pi-pic">
                            <img src="/admin/assets/images/products/{{$laptopProduct->productImage[0]->path ?? ''}}" alt="">

                            @if($laptopProduct->discount != null)
                            <div class="sale">Sale</div>
                            @endif
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="javascript:addCart({{ $laptopProduct->id }})"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="/shop/product-detail/{{$laptopProduct->id}}">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">{{ str_replace('-', ' ', $categoryTag) }}</div>
                            <a href="/shop/product-detail/{{$laptopProduct->id}}">
                                <h5>{{$laptopProduct->name}}</h5>
                            </a>
                            <div class="product-price">
                                @if($laptopProduct->discount != null)
                                {{ number_format($laptopProduct->discount, 0, ',', '.') }} đ
                                <span>{{ number_format($laptopProduct->price, 0, ',', '.') }} đ</span>
                                @else
                                {{ number_format($laptopProduct->price, 0, ',', '.') }} đ
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg" data-setbg="img/products/man-large.jpg">
                    <h2>Quần áo nam</h2>
                    <a href="/shop">Khám Phá Thêm</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                @include('FrontEnd.shop.components.produts-sidebar-filter')
            </div> --}}
            <div class="container">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-right">
                            <p>Hiển thị {{ $startResult }} - {{ $endResult }} sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item item {{$product->tag}}">
                                <div class="pi-pic">
                                    <img src="/admin/assets/images/products/{{ $product->productImage[0]->path ?? '' }}" alt="">

                                    @if($product->discount != null)
                                    <div class="sale pp-sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="javascript:addCart({{ $product->id }})"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="/shop/product-detail/{{$product->id}}">+ Xem chi tiết</a></li>
                                        <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{$product->tag}}</div>
                                    <a href="/shop/product-detail/{{$product->id}}">
                                        <h5>{{$product->name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        @if($product->discount != null)
                                        {{ number_format($product->discount, 0, ',', '.') }} đ
                                        <span>{{ number_format($product->price, 0, ',', '.') }} đ</span>
                                        @else
                                        {{ number_format($product->price, 0, ',', '.') }} đ
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-5">
                    {{ $products->links("pagination::bootstrap-4") }}
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Bài viết mới nhất</h2>
                        </div>
                    </div>
                    @foreach($latestBlogs as $blog)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                            </div>
                            <div class="bi-text">
                                <h4><strong>{{ $blog->title }}</strong></h4>
                                <p>{{ Str::limit($blog->content, 100) }}</p>
                                <a href="{{ route('blog.show', $blog->id) }}" class="read-more">
                                    Đọc thêm <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit single-benefitnek">
                        <div class="sb-icon">
                            <img src="./img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Miễn phí vận chuyển</h6>
                            <p>Đối với đơn hàng trên 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="./img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Giao hàng đúng hạn</h6>
                            <p>Nếu không có vấn đề gì</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="./img/icon-3.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Thanh toán an toàn</h6>
                            <p>Thanh toán an toàn 100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->
@endsection