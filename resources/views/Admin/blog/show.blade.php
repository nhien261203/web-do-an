@extends('admin.layouts.master')
@section('title', 'Chi tiết Blog')

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
                    Chi tiết Blog
                    <div class="page-title-subheading">
                        Xem chi tiết thông tin blog
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="position-relative row form-group">
                        <label class="col-md-3 text-md-right col-form-label">Tiêu đề</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $blog->title }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label class="col-md-3 text-md-right col-form-label">Phụ đề</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $blog->subtitle }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label class="col-md-3 text-md-right col-form-label">Danh mục</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{ $blog->category }}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label class="col-md-3 text-md-right col-form-label">Hình ảnh</label>
                        <div class="col-md-9 col-xl-8">
                            <img style="height: 200px;" src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label class="col-md-3 text-md-right col-form-label">Nội dung</label>
                        <div class="col-md-9 col-xl-8">
                            <div>{!! $blog->content !!}</div>
                        </div>
                    </div>

                    <div class="position-relative row form-group mb-1">
                        <div class="col-md-9 col-xl-8 offset-md-3">
                            <a href="{{ route('admin.blog.index') }}" class="btn-shadow btn-hover-shine btn btn-primary">
                                <span class="btn-icon-wrapper pr-2 opacity-8">
                                    <i class="fa fa-check fa-w-20"></i>
                                </span>
                                <span>OK</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection