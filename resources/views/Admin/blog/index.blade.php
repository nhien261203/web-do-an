@extends('admin.layouts.master')
@section('title', 'Danh sách Blog')

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
                        Quản lý danh sách bài viết blog.
                    </div>
                </div>
            </div>

            <div class="page-title-actions">
                <a href="{{ route('admin.blog.create') }}" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Thêm mới
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="card-header">
                    <form>
                        <div class="input-group">
                            <input type="search" name="search" id="search" placeholder="Tìm kiếm" class="form-control" 
                                value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;
                                    Tìm kiếm
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
                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>Danh mục</th>
                                {{-- <th>Ngày tạo</th> --}}
                                <th class="text-center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td class="text-center text-muted">#{{ $blog->id }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $blog->title }}</div>
                                                <div class="widget-subheading opacity-7">{{ $blog->subtitle }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <img style="height: 60px;" data-toggle="tooltip" title="Hình ảnh"
                                        src="admin/assets/images/blogs/{{ $blog->image }}" alt="">
                                </td>
                                <td>{{ $blog->category }}</td>
                                {{-- <td>{{ $blog->created_at->format('d/m/Y') }}</td> --}}
                                <td class="text-center">
                                    <a href="{{ route('admin.blog.show', $blog->id) }}" 
                                        class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                        Chi tiết
                                    </a>
                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" 
                                        class="btn btn-hover-shine btn-outline-success border-0 btn-sm">
                                        Sửa
                                    </a>
                                    <form class="d-inline" action="{{ route('admin.blog.destroy', $blog->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                            type="submit" data-toggle="tooltip" title="Delete"
                                            data-placement="bottom"
                                            onclick="return confirm('Bạn có chắc muốn xóa bài viết này?')">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-trash fa-w-20"></i>
                                            </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-block card-footer">
                    {{ $blogs->links("pagination::bootstrap-4") }}
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection