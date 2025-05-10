@extends('admin.layouts.master')
@section('title', 'Thêm mới blog')

@section('body')
<!-- Main -->
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Blog
                    <div class="page-title-subheading">
                        Tạo mới bài viết blog.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ $error }}</strong>
                        </div>
                    @endforeach
                @endif

                <div class="card-body">
                    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="position-relative row form-group">
                            <label for="title" class="col-md-3 text-md-right col-form-label">Tiêu đề</label>
                            <div class="col-md-9 col-xl-8">
                                <input name="title" id="title" type="text" class="form-control" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="subtitle" class="col-md-3 text-md-right col-form-label">Phụ đề</label>
                            <div class="col-md-9 col-xl-8">
                                <input name="subtitle" id="subtitle" type="text" class="form-control" value="{{ old('subtitle') }}">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="category" class="col-md-3 text-md-right col-form-label">Danh mục</label>
                            <div class="col-md-9 col-xl-8">
                                <input name="category" id="category" type="text" class="form-control" value="{{ old('category') }}">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="image" class="col-md-3 text-md-right col-form-label">Hình ảnh</label>
                            <div class="col-md-9 col-xl-8">
                                <input type="file" name="image" class="form-control-file">
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="content" class="col-md-3 text-md-right col-form-label">Nội dung</label>
                            <div class="col-md-9 col-xl-8">
                                <textarea name="content" id="content" rows="5" class="form-control">{{ old('content') }}</textarea>
                            </div>
                        </div>

                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-danger mr-1">
                                    <i class="fa fa-times fa-w-20"></i> Hủy
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save fa-w-20"></i> Lưu
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection
